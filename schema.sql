CREATE DATABASE php_app;
USE DATABASE php_app;
CREATE TABLE app_user(
    id smallint unsigned PRIMARY KEY auto_increment,
    email varchar(255) not null,
    password varchar(50) not null
)
CREATE TABLE user_profile(
    user_id smallint unsigned ,
    id smallint unsigned PRIMARY KEY auto_increment,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    gender varchar (7) not null,
    address text not null,
    cnic text not null,
    date_of_birth date not null,
    
    FOREIGN KEY user_id REFERENCES app_user(id);
);
