CREATE DATABASE yeticave
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE yeticave;

CREATE TABLE categories (
id      INT AUTO_INCREMENT PRIMARY KEY,
name    CHAR NOT NULL UNIQUE,
code    CHAR NOT NULL UNIQUE
);

CREATE TABLE lots (
id      	   INT AUTO_INCREMENT PRIMARY KEY,
data_create    TIMESTAMP,
name    	   CHAR NOT NULL,
description    CHAR NOT NULL,
image		   CHAR NOT NULL,
price_begin    DECIMAL NOT NULL,
date_end	   TIMESTAMP NOT NULL,
price_step     DECIMAL NOT NULL,
author 	       CHAR REFERENCES users(name),
winner 	       CHAR REFERENCES users(name),
category       CHAR REFERENCES categories(name),
INDEX(name),
INDEX(description)
);

CREATE TABLE rates (
id      	INT AUTO_INCREMENT PRIMARY KEY,
date_rate   TIMESTAMP,
price_rate	DECIMAL,
user 		CHAR REFERENCES users(name),
lot 		INT REFERENCES lots(id)
);

CREATE TABLE users (
id      		INT AUTO_INCREMENT PRIMARY KEY,
date_reg   		TIMESTAMP,
email 			CHAR NOT NULL UNIQUE,
name 			CHAR NOT NULL UNIQUE,
password 		CHAR NOT NULL,
avatar 			CHAR,
communication	CHAR NOT NULL,
lot 			INT REFERENCES lots(id),
rate 			INT REFERENCES rates(id)
);
