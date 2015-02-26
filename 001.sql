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
