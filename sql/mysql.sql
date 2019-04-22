create database class;
use class;
create table users(
	id varchar(50) primary key,
	name varchar(100),
	password varchar(100),
	role varchar(20),
	class varchar(200)
);
create table courses(
	id integer auto_increment primary key,
	subject varchar(100),
	subject_no varchar(100),
	teacher_id varchar(50)
);
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
