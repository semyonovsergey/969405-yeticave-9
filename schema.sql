CREATE DATABASE yeticave
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE yeticave;

CREATE TABLE categories (
id      INT(2) AUTO_INCREMENT PRIMARY KEY,
name    CHAR(50) NOT NULL UNIQUE,
code    CHAR(10) NOT NULL UNIQUE
);

CREATE TABLE lots (
id      	   INT(10) AUTO_INCREMENT PRIMARY KEY,
date_create    DATETIME,
name    	   CHAR(50) NOT NULL,
description    CHAR(255) NOT NULL,
image		   CHAR(255) NOT NULL,
price_begin    INT(6) NOT NULL,
date_end	   DATETIME,
price_step     INT(6) NOT NULL,
author 	       INT(3) REFERENCES users(id),
winner 	       CHAR(20) REFERENCES users(id),
category       CHAR(50) REFERENCES categories(id),
INDEX(name),
INDEX(description)
);

CREATE TABLE bets (
id      	INT(10) AUTO_INCREMENT PRIMARY KEY,
date_rate   DATETIME,
price_rate	INT(6),
user 		INT(3) REFERENCES users(id),
lot 		INT(3) REFERENCES lots(id)
);

CREATE TABLE users (
id      		INT(10) AUTO_INCREMENT PRIMARY KEY,
date_reg   		DATETIME,
email 			CHAR(30) NOT NULL UNIQUE,
name 			CHAR(20) NOT NULL UNIQUE,
password 		CHAR(64) NOT NULL,
avatar 			CHAR(255),
communication	CHAR(30) NOT NULL,
);
