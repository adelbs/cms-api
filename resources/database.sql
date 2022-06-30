create database cms_api;

-- users
create table users (
    id int auto_increment primary key,
    name varchar(100) not null,
    email varchar(100) not null,
    password varchar(100) not null
);

-- section
create table section (
    id int auto_increment primary key,
    idkey varchar(100) not null unique,
    name varchar(30),
    description varchar(255)
);

-- content
create table content (
    id int auto_increment primary key,
    idkey varchar(100) unique,
    name varchar(30),
    description varchar(255),
    content text
);

-- images
create table images (
    id int auto_increment primary key,
    idkey varchar(100) unique,
    name varchar(30),
    description varchar(255),
    file varchar(100) not null
);
