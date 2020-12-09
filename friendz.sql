     
CREATE TABLE login(
ID_NO SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(250) NOT NULL,  
passkey varchar(200) NOT NULL);



CREATE TABLE reg(
ID_NO SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
fname varchar(200) NOT NULL,
mname varchar(200) NOT NULL,
sname varchar(200) NOT NULL,
uname varchar(200) NOT NULL,
passkey varchar(200) NOT NULL,
address varchar(200) NOT NULL,
phone_no varchar(200) NOT NULL,
occupation varchar(200) NOT NULL ,
gender varchar(200) NOT NULL,
state varchar(200) NOT NULL,
lga varchar(200) NOT NULL,
day varchar(200) NOT NULL,
month varchar(200) NOT NULL,
year varchar(200) NOT NULL,
pix varchar(200) NOT NULL,
date varchar(200) NOT NULL
);


 CREATE TABLE chat(
ID_NO SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
chat varchar(250) NOT NULL,
name varchar(250) NOT NULL,  
pic varchar(250) NOT NULL,
date varchar(200) NOT NULL);
