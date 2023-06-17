#!/bin/bash

VOLUME_HOME="/var/lib/mysql"
MSMTP_CONFIG_ORGINAL="/app/deploy/msmtprc"
MSMTP_CONFIG_PERSISTENT="$VOLUME_HOME/.msmtprc"
MSMTP_CONFIG_LINK="/var/www/.msmtprc"
# once created / container is first time started, mannually edit "gbuonline/db/.msmtprc" without changing permissions

sed -ri -e "s/^upload_max_filesize.*/upload_max_filesize = ${PHP_UPLOAD_MAX_FILESIZE}/" \
    -e "s/^post_max_size.*/post_max_size = ${PHP_POST_MAX_SIZE}/" /etc/php/5.6/apache2/php.ini

sed -i "s/export APACHE_RUN_GROUP=www-data/export APACHE_RUN_GROUP=root/" /etc/apache2/envvars

if [ -n "$APACHE_ROOT" ];then
    rm -f /var/www/html && ln -s "/app/${APACHE_ROOT}" /var/www/html
fi

sed -i -e "s/cfg\['blowfish_secret'\] = ''/cfg['blowfish_secret'] = '`date | md5sum`'/" /var/www/phpmyadmin/config.inc.php

mkdir -p /var/run/mysqld
chmod -R 777 /var/run/mysqld
rm /var/run/mysqld/mysqld.sock

if [[ ! -d $VOLUME_HOME/mysql ]]; then
    echo "=> An empty or uninitialized MySQL volume is detected in $VOLUME_HOME"
    echo "=> Installing MySQL ..."

    # Try the 'preferred' solution
    mysqld --initialize-insecure > /dev/null 2>&1

    # IF that didn't work
    if [ $? -ne 0 ]; then
        # Fall back to the 'depreciated' solution
        mysql_install_db > /dev/null 2>&1
    fi

    echo "=> Done!"  

    /usr/bin/mysqld_safe > /dev/null 2>&1 &
    tail -f /var/log/mysql/error.log &
    
    RET=1
    while [[ RET -ne 0 ]]; do
        echo "=> Waiting for confirmation of MySQL service startup"
        sleep 5
        mysql -uroot -e "status" > /dev/null 2>&1
        RET=$?
    done

    PASS=${MYSQL_ADMIN_PASS:-$(pwgen -s 12 1)}
    _word=$( [ ${MYSQL_ADMIN_PASS} ] && echo "preset" || echo "random" )
    echo "=> Creating MySQL admin user with ${_word} password"

    mysql -uroot -e "CREATE USER 'admin'@'%' IDENTIFIED BY '$PASS'"
    mysql -uroot -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' WITH GRANT OPTION"
        mysql -uroot -e " GRANT ALL PRIVILEGES ON phpmyadmin.* TO  'pma'@'localhost' IDENTIFIED BY ''"

    echo "=> Done!"

    echo "========================================================================"
    echo "You can now connect to this MySQL Server with $PASS"
    echo ""
    echo "    mysql -uadmin -p$PASS -h<host> -P<port>"
    echo "    mysql -uadmin -p$PASS -h<host> -P<port>" > $VOLUME_HOME/mysql/pma_creds
    echo ""
    echo "Please remember to change the above password as soon as possible!"
    echo "MySQL user 'root' has no password but only allows local connections"
    echo ""

    echo "setting up gbuonline db"
    mysql -uroot -e "CREATE DATABASE gbuonline"
    mysql -uroot gbuonline < /app/gbuonline.sql 
    echo "done setting up gbuonline db"

    mysqladmin -uroot shutdown
else
    echo "=> Using an existing volume of MySQL"
fi

if [ ! -e "$MSMTP_CONFIG_PERSISTENT" ];then
    cp $MSMTP_CONFIG_ORGINAL $MSMTP_CONFIG_PERSISTENT
    chown www-data $MSMTP_CONFIG_PERSISTENT
    chmod 600 $MSMTP_CONFIG_PERSISTENT

    echo "created gbuonline/db/.msmtprc, edit it without changing perms to setup mail"
fi
ln -s $MSMTP_CONFIG_PERSISTENT $MSMTP_CONFIG_LINK

exec supervisord -n

