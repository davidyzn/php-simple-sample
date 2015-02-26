create database forum2 character set utf8;

use forum2;

create table languages(
lang_id tinint unsigned not null auto_increment,
lang varchar(60) not null,
lang_eng varchar(20) not null,
primary key(lang_id),
unique(lang)
);

create table threads{
	thread_id int unsigned not null auto_increment,
	lang_id tinyint(3) unsigned not null,
	user_id int unsigned not null,
	subject varchar(150) not null,
	primary key (thread_id),
	index(lang_id),
	index(user_id)
	};

create table posts(
post_id int unsigned not null auto_increment,
thread_id int unsigned not null,
user_id int unsigned not null,
message text not null,
posted_on datetime not null,
primary key(post_id),
index(thread_id),
index(user_id)
);

create table users(
user_id mediumint unsigned not null auto_increment,
lang_id tinyint unsigned not null,
time_zone varchar(30) not null,
username varchar(30) not null,
pass char(40) not null,
email varchar(60) not null,
primary key(user_id),
unique(username),
unique(email),
index login(username,pass)
);

create table words(
word_id tinyint unsigned not null auto_increment,
lang_id tinyint unsigned not null,
title varchar(80) not null,
intro tinytext not null,
home varchar(30) not null,
forum_home varchar(40) not null,
`language` varchar(40) not null,
register varchar(40) not null,
login varchar(30) not null,
logout varchar(30) not null,
new_thread varchar(40) not null,
subject varchar(30) not null,
body varchar(30) not null,
submit varchar(30) not null,
posted_on varchar(30) not null,
posted_by varchar(30) not null,
replies varchar(30) not null,
latest_reply varchar(40) not null,
post_a_reply varchar(40) not null,
primary key(word_id),
unique(lang_id)
);

insert into languages(lang,lang_eng)values
	('english','english'),
	('Portugues','portuguese'),
	('francais','french'),
	('norsk','norwegian'),
	('中文','chinese');

insert into users(lang_id,time_zone,username,pass,email) values
	(1,'america/new_york','troutser',SHA1('password'),'email@example.com'),
	(4,'europe/berlin','ute',SHA1('pa24word'),'email1@example.com'),
	(2,'europe/oslo','silje',SHA1('2kll13'),'email2@example.com'),
	(1,'america/sao_paulo','joae',SHA1('fjdln34'),'email3@example.com'),
	(1,'pacific/auckland','kiwi',SHA1('conchord'),'kiwi@example.org');

insert into words values
	(null,1,'PHP and MySQL for Dynamic Web Sites:The Forum!','<p>Welcome to our site....please use
		the links above...blah,blah,blsh.</p>\r\n<p>Welcome to our site ...please use the links 
		above...the links above...blah,blah,blah.</p>','home','forum home','language','register',
		'login','loginout','new thread','subject','body','submit','posted on','posted by','replies',
		'latest reply','post a reply');
	
