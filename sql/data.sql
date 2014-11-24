USE dbrow52tadb;
LOAD DATA INFILE '/tmp/fall2014data.txt' 
INTO TABLE Instructor
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
(firstname, lastname, western_id);

INSERT INTO Instructor 
VALUES ('David', 'Brown', 'dbrow52');

SELECT * FROM Instructor; 

INSERT INTO TeachingAssistant
VALUES ('Homer', 'Simpson', '250011111', 'hsimpson', 'Masters', '', 'lreid2');

INSERT INTO TeachingAssistant
VALUES ('Marge','Simpson', '250011112', 'msimpson', 'Masters', '',  'mmm');

INSERT INTO TeachingAssistant
VALUES ('Lisa', 'Simpson', '250011113', 'lsimpson', 'PhD', '', 'lreid2'); 

INSERT INTO TeachingAssistant
VALUES ('Maggie', 'Simpson', '250011114', 'msimpso1', 'PhD', '', 'lreid2'); 

INSERT INTO TeachingAssistant
VALUES ('Ned', 'Flanders', '250000666', 'nflander', 'PhD', '', 'mkatchab'); 

INSERT INTO TeachingAssistant
VALUES ('Todd', 'Flanders', '250000667', 'tflander', 'Masters', '', 'mbauer'); 

INSERT INTO TeachingAssistant
VALUES ('Monty', 'Burns', '250000001', 'mburns', 'PhD', '',  'dvancise'); 

INSERT INTO TeachingAssistant
VALUES ('Waylan', 'Smithers', '250022222', 'wsmither', 'PhD', '', 'mbauer'); 

INSERT INTO TeachingAssistant
VALUES ('Goku', 'Son', '250639097', 'gokuson', 'Masters', '', 'dbrow52');

SELECT * FROM TeachingAssistant;

INSERT INTO Course
VALUES ('Intro to Programming', '1026');

INSERT INTO Course
VALUES ('Multimedia and Communications', '1033');

INSERT INTO Course
VALUES ('Info Systems and Design', '1032');

INSERT INTO Course
VALUES ('Intro to Software Engineering', '2212');

INSERT INTO Course
VALUES ('Intro to Databases', '3319');

INSERT INTO Course
VALUES ('Advanced Databases', '4411');

INSERT INTO Course
VALUES ('Data Structures', '2210');

INSERT INTO Course
VALUES ('Computer Organization', '2208');

INSERT INTO Course
VALUES ('Logic', '2209');

INSERT INTO Course
VALUES ('Software Tools', '2211');

INSERT INTO Course
VALUES ('Networks', '3357');

SELECT * FROM Course;

INSERT INTO CoSupervises
VALUES ('mdaley', 'hsimpson');

INSERT INTO CoSupervises
VALUES ('mbauer', 'hsimpson');

INSERT INTO CoSupervises
VALUES ('mdaley', 'mburns');

INSERT INTO CoSupervises
VALUES ('dvancise', 'mburns');

INSERT INTO CoSupervises
VALUES ('mbauer', 'msimpso1');

INSERT INTO CoSupervises
VALUES ('sosborn', 'msimpso1');

INSERT INTO CoSupervises
VALUES ('mperry', 'msimpso1');

INSERT INTO CoSupervises
VALUES ('lreid2', 'lsimpson');

INSERT INTO AssignedTo 
VALUES ('hsimpson', '1033', '2014', 'Fall');

INSERT INTO AssignedTo 
VALUES ('tflanders', '1033', '2014', 'Fall');

INSERT INTO AssignedTo 
VALUES ('msimpson', '1033', '2014', 'Fall');

INSERT INTO AssignedTo 
VALUES ('hsimpson', '3357', '2013', 'Spring');

INSERT INTO AssignedTo 
VALUES ('tflanders', '3357', '2013', 'Spring');

INSERT INTO AssignedTo 
VALUES ('wsmither', '3357', '2013', 'Spring');

INSERT INTO AssignedTo 
VALUES ('mburns', '3357', '2013', 'Spring');

INSERT INTO AssignedTo 
VALUES ('lsimpson', '1033', '2013', 'Fall');

INSERT INTO AssignedTo 
VALUES ('nflanders', '1033', '2013', 'Fall');

INSERT INTO AssignedTo 
VALUES ('mburns', '3319', '2014', 'Fall');

INSERT INTO AssignedTo 
VALUES ('lsimpson', '1026', '2014', 'Fall');

INSERT INTO AssignedTo 
VALUES ('msimpso1', '1026', '2014', 'Fall');

INSERT INTO AssignedTo 
VALUES ('wsmither', '1026', '2014', 'Summer');

INSERT INTO AssignedTo 
VALUES ('msimpson', '1026', '2014', 'Summer');

UPDATE TeachingAssistant
SET firstname = 'Rod'
WHERE western_id = 'tflander';

SELECT * FROM TeachingAssistant; 

UPDATE TeachingAssistant
SET head_supervisor = 'mperry'
WHERE western_id = 'wsmither';

SELECT * FROM TeachingAssistant;

UPDATE AssignedTo
SET year = '2012'
WHERE course = '1026' AND year = '2014' AND term = 'Fall';

SELECT * FROM AssignedTo;
