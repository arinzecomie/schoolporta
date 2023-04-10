<?php 
  
   $conn = new mysqli("localhost", "root", "", "johnbusco");

//create student table
$create_tb = " CREATE TABLE users (
users_id INT NOT NULL AUTO_INCREMENT,
user_code VARCHAR (15) NOT NULL,
password VARCHAR (50) NOT NULL,
full_name VARCHAR (50) NOT NULL,
gender VARCHAR (6) NOT NULL,
priority VARCHAR (5) NOT NULL,
PRIMARY KEY (users_id)
)";

$result = $conn->query($create_tb);

 if (!$result) { 
   print "Student table not created<br>";}


//create student address table
$create_tb = " CREATE TABLE stud_de (
stud_id INT NOT NULL AUTO_INCREMENT,
stud_code VARCHAR (15) NOT NULL,
stud_cl INT (2) NOT NULL,
stud_subcl INT (2) NOT NULL,
stud_level INT (2) NOT NULL,
stud_term INT (2) NOT NULL,
anual_set INT (2) NOT NULL,
stud_status INT (2) NOT NULL,
stud_note INT (2) NOT NULL,
stud_subj VARCHAR (50) NOT NULL,
date_set VARCHAR (20) NOT NULL,
PRIMARY KEY (stud_id)
)";

$result = $conn->query($create_tb);
 if (!$result) { 
   print "Studen address table not created<br>";}


//create student identification table
$create_tb = " CREATE TABLE staff_de (
staff_id INT NOT NULL AUTO_INCREMENT,
staff_code VARCHAR (15) NOT NULL,
staff_cl INT (2) NOT NULL,
staff_gander VARCHAR (15) NOT NULL,
staff_mcl VARCHAR (100) NOT NULL,
stud_subj VARCHAR (50) NOT NULL,
date_reg VARCHAR (20) NOT NULL,
PRIMARY KEY (staff_id)
)";


$result = $conn->query($create_tb);
 if (!$result) { 
   print "Student Identification table not created<br>";}


//create subject table
$create_tb = " CREATE TABLE subject (
subj_id INT NOT NULL AUTO_INCREMENT,
subj_name VARCHAR (50) NOT NULL,
PRIMARY KEY (subj_id)
)";

$result = $conn->query($create_tb);
 if (!$result) { 
   print "Subject table not created<br>";}
   
 
//create assesment table
$create_tb = " CREATE TABLE assesment (
asses_id INT NOT NULL AUTO_INCREMENT,
stud_code VARCHAR (50) NOT NULL,
subj_id INT (3) NOT NULL,
asses_1 VARCHAR (10) NOT NULL,
asses_2 VARCHAR (10) NOT NULL,
asses_3 VARCHAR (10) NOT NULL,
exam VARCHAR (10) NOT NULL,
PRIMARY KEY (asses_id)
)";

$result = $conn->query($create_tb);
 if (!$result) { 
   print "Assesment-table not created<br>";}
   
//create class table
$create_tb = " CREATE TABLE ass_exe (
ass_exe_id INT NOT NULL AUTO_INCREMENT,
assignment_id INT NOT NULL,
cl_name VARCHAR (150) NOT NULL,
PRIMARY KEY (ass_exe_id)
)";

$result = $conn->query($create_tb);
 if (!$result) { 
   print "Class table not created<br>";}

 //create assignment table
$create_tb = " CREATE TABLE result (
result_id INT NOT NULL AUTO_INCREMENT,
stud_id INT (2) NOT NULL,
stud_code VARCHAR (50) NOT NULL,
stud_cl INT (20) NOT NULL,
stud_subcl INT (20) NOT NULL,
term INT (30) NOT NULL,
result_ass TEXT NOT NULL,
dateset VARCHAR (20) NOT NULL,
PRIMARY KEY (result_id)
)";

$result = $conn->query($create_tb);
 if (!$result) { 
   print "Assignment Table not created<br>";}


  
  // S S 3 2019/2020.       
   
    