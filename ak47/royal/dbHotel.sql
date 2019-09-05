
CREATE DATABASE dbHotel;
USE dbHotel;


CREATE TABLE  users(
userId bigint(12) NOT NULL AUTO_INCREMENT,
firstname varchar(50) NOT NULL DEFAULT '',
lastname varchar(50) NOT NULL DEFAULT '',
mobilenumber varchar(10) NOT NULL DEFAULT '',
email varchar(60) NOT NULL DEFAULT '',
username varchar(60) NOT NULL DEFAULT '',
password varchar(60) NOT NULL DEFAULT '',
createdDate bigint(10) NOT NULL DEFAULT 0,
updateDate bigint(10) NOT NULL DEFAULT 0,
PRIMARY KEY (userId)

);
