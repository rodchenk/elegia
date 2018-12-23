@echo off
cd ../mysql/bin/
@echo on


mysqldump.exe -u root -p elegia > ../../htdocs/db_backup/scheme/backup_%date:/=%.sql
@echo off
cd ../../htdocs