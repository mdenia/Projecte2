FROM mysql:latest

COPY init.sql /docker-entrypoint-initdb.d/
RUN chmod 755 /var/lib/mysql