<<<<<<< HEAD
create database class default character set utf8 collate utf8_unicode_ci;

use class;

create table users (
=======
create database class;
use class;
create table users(
>>>>>>> 934a856e71c740f37b39c8cf1f9c3215c8a491f0
	id varchar(50) primary key,
	name varchar(100),
	password varchar(100),
	role varchar(20),
	class varchar(200)
);
<<<<<<< HEAD

create table courses (
=======
create table courses(
>>>>>>> 934a856e71c740f37b39c8cf1f9c3215c8a491f0
	id integer auto_increment primary key,
	subject varchar(100),
	subject_no varchar(100),
	teacher_id varchar(50)
);
<<<<<<< HEAD

create table course_students (
	course_id integer,
	student_id varchar(50),
	created_at timestamp
);

create table assignments (
	id integer auto_increment primary key,
	title varchar(200),
	attachment varchar(200),
	created_at timestamp,
	course_id integer
);
create table assignment_records (
	id integer auto_increment primary key,
	assignment_id integer,
	student_id varchar(50),
	created_at timestamp,
	attachment varchar(200),
	score float
);

insert into users (id, password, role, name) values ('2017026', '2017026', 'teacher', '金杰');
=======
create table course_student(
	course_id integer,
	student_id varchar(50),
	create_at timestamp
);
create table  assignments(
	id integer auto_increment primary key,
	title varchar(200),
	attachement varchar(200),
	course_id integer,
	create_at timestamp
);
create table assignment_records(
	id integer auto_increment primary key,
	assignment_id integer,
	student_id varchar(50),
	attachement varchar(200),
	score float,
	create_at timestamp
);
>>>>>>> 934a856e71c740f37b39c8cf1f9c3215c8a491f0
