@echo 'PASSWORD IST LEER, EINFACH ENTER CLICKEN'
@echo off
cd ../mysql/bin/
@echo o
mysql.exe -u root -p -e "CREATE DATABASE IF NOT EXISTS elegia"
mysql.exe -u root -p elegia < ../../htdocs/db-scheme.sql
@echo 'successfully completed, guys'
@echo off
cd ../../htdocs