CREATE USER 'snipeit'@'%' IDENTIFIED BY 'itadmin';
GRANT ALL PRIVILEGES ON snipeit.* TO 'snipeit'@'%';
FLUSH PRIVILEGES;
