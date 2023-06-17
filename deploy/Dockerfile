# Run this from parent directory

FROM jakejarvis/lamp-php5:latest

EXPOSE 80
USER root

RUN apt update || true

RUN apt -y upgrade -o Dpkg::Options::="--force-confold"
RUN apt install msmtp-mta -y
RUN apt autoremove -y

COPY deploy/docker-entrypoint.sh /tmp/docker-entrypoint.sh
RUN chmod a+x /tmp/docker-entrypoint.sh
CMD ["/tmp/docker-entrypoint.sh"]
