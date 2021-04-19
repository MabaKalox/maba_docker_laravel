CREATE USER 'laraveluser'@'%' IDENTIFIED BY 'your_laravel_db_password';
GRANT ALL ON laravel.* TO 'laraveluser'@'%';
