create database exam
GO
use exam
GO

--1.Create Table:
create table teachers(
TeacherID INT Primary Key,
FirstName VARCHAR(255),
LastName VARCHAR(255),
Subject VARCHAR(255))
;
create table classes(
ClassID INT Primary Key,
ClassName VARCHAR(255),
TeacherID INT Foreign Key references teachers(TeacherID));
create table students(
StudentID INT Primary Key,
FirstName VARCHAR(255),
LastName VARCHAR(255),
ClassID INT Foreign Key references classes(ClassID),
BirthDate DATE)
;
--2.More Data:
INSERT INTO teachers (TeacherID, FirstName, LastName, Subject) 
VALUES 
(1, 'John', 'Doe', 'Mathematics'), 
(2, 'Jane', 'Smith', 'Science'), 
(3, 'Jim', 'Brown', 'History');
INSERT INTO classes (ClassID, ClassName, TeacherID) 
VALUES 
(1, '12a1', 1), 
(2, '12a2', 2), 
(3, '12a3', 3), 
(4, '12d1', 2), 
(5, '12d2', 1);
INSERT INTO students (StudentID, FirstName, LastName, ClassID, BirthDate) 
VALUES 
(1, 'Alice', 'Johnson', 1, '2005-04-01'), 
(2, 'Bob', 'Lee', 1, '2006-05-12'), 
(3, 'Charlie', 'Kim', 2, '2005-02-19'), 
(4, 'David', 'Park', 2, '2006-03-22'), 
(5, 'Eva', 'Davis', 3, '2005-11-08'), 
(6, 'Frank', 'Garcia', 3, '2006-01-15'), 
(7, 'Grace', 'Martinez', 4, '2005-09-30'), 
(8, 'Henry', 'Rodriguez', 4, '2006-08-17'), 
(9, 'Isabella', 'Wilson', 5, '2005-06-25'), 
(10, 'Jack', 'Martinez', 5, '2006-12-10');

--3.Data Query:
select s.*,c.ClassName,t.FirstName+' '+t.LastName as teacher_name
from students s, classes c, teachers t
where s.ClassID=c.ClassID and c.TeacherID=t.TeacherID
;
--4. Query Conditions:
select * from students where Year(BirthDate)>=2000
;
--5. JOIN Query:select s.*,c.ClassName,t.FirstName+' '+t.LastName as teacher_name
from students s, classes c, teachers t
where s.ClassID=c.ClassID and c.TeacherID=t.TeacherIDorder by s.FirstName;--6. Updating data:update studentsset FirstName='John' where StudentID=3update studentsset LastName='Due' where StudentID=3
;
--7. Delete data:
delete from students where StudentID=7
;
go
--8. Procedure:create procedure GetStudentsByClassAndSubject @ClassID int, @Subject VARCHAR(255) as(select s.*,c.ClassName,t.Subject from students sjoin classes con s.ClassID=@ClassIDjoin teachers ton t.TeacherID=c.TeacherIDwhere c.ClassID=@ClassID and t.Subject=@Subject);execute GetStudentsByClassAndSubject @ClassID=5,@Subject='Mathematics';--9. View:create view StudentsWithClassAndTeacher asselect s.*,c.ClassName,t.FirstName+' '+t.LastName as teacher_name
from students s, classes c, teachers t
where s.ClassID=c.ClassID and c.TeacherID=t.TeacherID

select * from [StudentsWithClassAndTeacher]