SHOW DATABASES;
DROP DATABASE IF EXISTS dbrow52tadb;
CREATE DATABASE dbrow52tadb;
USE dbrow52tadb;
SHOW TABLES;


CREATE TABLE Instructor ( # Change to Instructor
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    western_id varchar(8) NOT NULL UNIQUE,
    PRIMARY KEY (western_id)
);


CREATE TABLE TeachingAssistant (
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    student_number char(9) NOT NULL UNIQUE,
    western_id varchar(8) NOT NULL UNIQUE,
    degree varchar(7) NOT NULL,
    image_url varchar(2083), # http://stackoverflow.com/questions/219569/best-database-field-type-for-a-url
    head_supervisor varchar(8),
    FOREIGN KEY (head_supervisor) REFERENCES Instructor(western_id),
    PRIMARY KEY (western_id)
);


CREATE TABLE Course (
    name varchar(30),
    course_number char(4) NOT NULL UNIQUE,
    PRIMARY KEY (course_number)
);


CREATE TABLE CoSupervises (
    instructor varchar(8) NOT NULL,
    student varchar(8) NOT NULL,
    FOREIGN KEY (instructor) REFERENCES Instructor(western_id),
    FOREIGN KEY (student) REFERENCES TeachingAssistant(western_id),
    PRIMARY KEY (instructor, student)
);


CREATE TABLE AssignedTo (
    student varchar(8) NOT NULL,
    course char(4) NOT NULL,
    year char(4) NOT NULL,
    term varchar(6) NOT NULL,
    FOREIGN KEY (student) REFERENCES TeachingAssistant(western_id),
    FOREIGN KEY (course) REFERENCES Course(course_number),
    PRIMARY KEY (student, course)
);

SHOW TABLES;
