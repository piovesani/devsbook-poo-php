create database devsbook;
use devsbook;

create table users(
id int not null auto_increment primary key,
email varchar(100) not null,
password varchar(200) not null,
name varchar(100) not null,
birthdate date not null,
city varchar(100) not null,
work varchar(100) not null,
avatar varchar(100) not null,
cover varchar(100) not null,
token varchar(200) not null);

create table user_relations(
id int not null auto_increment primary key,
user_from int not null,
user_to int not null);

create table posts(
id int not null auto_increment primary key,
type varchar(20) not null,
created_at datetime not null,
body text not null);

create table post_comments(
id int not null auto_increment primary key,
id_post int not null,
id_user int not null,
created_at datetime not null,
body text not null);

create table post_likes(
id int not null auto_increment primary key,
id_post int not null,
id_user int not null,
created_at datetime not null);