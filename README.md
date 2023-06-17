### [GBU Online](http://www.gbuonline.in)  
>####This is an internal website of Gautam Buddha University.  
<img src="https://raw.githubusercontent.com/opengbu/gbuonline/master/resources/images/collage.jpeg" height="300" width="800">  
  
### Main Features
* Schools Info
* Hostel Management
* Blog Space
* Virtual Notice Board
* Events Info
* Exams Section
* Clubs Info
* TimeTables
* E-Books
* Download Apps


## Env setup and deployment

### Docker setup

This project relies on legacy tech stack, we have dockerized it for easier setup.

To begine with you need to have docker installed, example: https://docs.docker.com/engine/install/ubuntu/

```
# build and start/restart the container:
docker-compose up --build --force-recreate

# or do the same in background
docker-compose up --build --force-recreate -d

# stop the container
docker-compose down
```

Container will restart on system reboot until you stop it manually.

Application should be up at localhost:8080.

### Database info

First time container starts, it will create database in `./db` and will persist after container stops/restarts. Database is bootstrapped on first start.

### PhpMyAdmin

PMA creds are present in `./db/mysql/pma_creds`

### Mail setup

For emails, some cloud hosts do not allow outgoing mails. We have to use smtp relay like sendinblue instead.

After, first time container starts, it creates `./db/.msmtprc`, modify it with your details without changing permissions.

### Auto scheduled deploys
Following cron re-deploys code daily at 12 am:
```
$ crontab -e
# code sync
0 0 * * * bash -lc gbuonline/deploy/docker-sync 1>&2
```
