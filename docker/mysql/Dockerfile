FROM mysql:8.0

ENV MYSQL_DATABASE=spot_books_db \
  MYSQL_USER=phper \
  MYSQL_PASSWORD=secret \
  MYSQL_ROOT_PASSWORD=secret \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 755 /etc/mysql/conf.d/my.cnf