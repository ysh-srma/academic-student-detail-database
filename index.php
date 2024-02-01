<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment Form</title>
    <style>
      *{margin: 0px;padding: 0px;font-size: 16px;}
      body{width: 100vw;display: flex;flex-direction: column;align-items: center;}

.rdropdown{position:relative;display:inline-block;}
.rdropdown-content{position:absolute;display:none;right:0px;width:max-content;box-shadow:0px 20px 20px 0px rgba(0,0,0,0.5);z-index: 1;background-color:rgba(180,40,40,0.9);border-radius:20px;border:2px solid blue;padding:0px 10px 0px 10px;}
a.link{display:block;color:white;text-decoration: none;text-align:center;padding:10px 15px 10px 15px;margin-top:5px;font-weight:bolder;font-size:20px;border:2px solid blue;border-radius:10px;background-color:red;}
a.link:hover{color:white;background-color:blue;border:2px solid white;}
.rdropdown:hover
.rdropdown-content{display:block;}

.enroll,.rdropbtn{color:white;border:2px solid white;border-radius:10px;font-weight:bolder;background-color:red;font-size:20px;padding:10px;width:150px;}
.enroll:hover,.rdropbtn:hover{background:blue;}

table.studetails input[type="text"],input[type="tel"],input[type="email"],input[type="tel"],input[type="date"]{height:50px;border:1px solid black; background:white;}
      textarea,select{background:white;border:1px solid black;}
      
      table.eduqual tr td,table.eduqual tr th{border:2px solid black;}
      table.eduqual input[type="text"],table.eduqual input[type="tel"]{width:100px;outline:none;border:none;}
      
      table.diploma tr td,table.diploma tr th{border:2px solid black;}
      table.diploma input[type="text"],table.diploma input[type="tel"]{width:100px;outline:none;border:none;}
      
      table.backpapers tr td,table.backpapers tr th{border:2px solid black;}
      table.backpapers input[type="text"],table.backpapers input[type="tel"]{width:100px;outline:none;border:none;}
    </style>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="font-size:30px;font-weight:bolder;">Student Enrollment Form</a>
    
    <div class="links" style="display:flex;flex-direction:row;gap:5px;">
          <a href="index.php"><button class="enroll">Enroll</button></a>
<div class="rdropdown">
   <button class="rdropbtn">Records</button>
  <div class="rdropdown-content">
			<a class="link" href="searchdetails.php">Search Details</a>
    <a class="link" href="studentsdetails.php">Students' Details</a>
    <a class="link" href="parentsdetails.php">Parents' Details</a>
    <a class="link"
href="moredetails.php">More Details</a>
    <a class="link" href="academicdetails.php">Academic Details</a>
    <a class="link" href="semesterdetails.php">Semester Details</a>
  </div>
</div>
    </div>
  </div>
</nav>

<?php
if(isset($_POST["enrollmentno"])){
$conn=new mysqli("localhost","root","");
if(!$conn){
				die("Connection Failed! "+$conn->connect_error);
}
else{
extract($_POST);

$createDB="create database if not exists registration;";
$conn->query($createDB);
$conn->select_db("registration");

$s1backs="";
$s2backs="";
$s3backs="";
$s4backs="";
$s5backs="";
$s6backs="";

//sem1backs
if($s1back1!=null){$s1backs.=$s1back1.",";}
if($s1back2!=null){$s1backs.=$s1back2.",";}
if($s1back3!=null){$s1backs.=$s1back3.",";}
if($s1back4!=null){$s1backs.=$s1back4.",";}
if($s1back5!=null){$s1backs.=$s1back5.",";}
if($s1back6!=null){$s1backs.=$s1back6;}

//sem2backs
if($s2back1!=null){$s2backs.=$s2back1.",";}
if($s2back2!=null){$s2backs.=$s2back2.",";}
if($s2back3!=null){$s2backs.=$s2back3.",";}
if($s2back4!=null){$s2backs.=$s2back4.",";}
if($s2back5!=null){$s2backs.=$s2back5.",";}
if($s2back6!=null){$s2backs.=$s2back6;}

//sem3backs
if($s3back1!=null){$s3backs.=$s3back1.",";}
if($s3back2!=null){$s3backs.=$s3back2.",";}
if($s3back3!=null){$s3backs.=$s3back3.",";}
if($s3back4!=null){$s3backs.=$s3back4.",";}
if($s3back5!=null){$s3backs.=$s3back5.",";}
if($s3back6!=null){$s3backs.=$s3back6;}

//sem4backs
if($s4back1!=null){$s4backs.=$s4back1.",";}
if($s4back2!=null){$s4backs.=$s4back2.",";}
if($s4back3!=null){$s4backs.=$s4back3.",";}
if($s4back4!=null){$s4backs.=$s4back4.",";}
if($s4back5!=null){$s4backs.=$s4back5.",";}
if($s4back6!=null){$s4backs.=$s4back6;}

//sem5backs
if($s5back1!=null){$s5backs.=$s5back1.",";}
if($s5back2!=null){$s5backs.=$s5back2.",";}
if($s5back3!=null){$s5backs.=$s5back3.",";}
if($s5back4!=null){$s5backs.=$s5back4.",";}
if($s5back5!=null){$s5backs.=$s5back5.",";}
if($s5back6!=null){$s5backs.=$s5back6;}

//sem6backs
if($s6back1!=null){$s6backs.=$s6back1.",";}
if($s6back2!=null){$s6backs.=$s6back2.",";}
if($s6back3!=null){$s6backs.=$s6back3.",";}
if($s6back4!=null){$s6backs.=$s6back4.",";}
if($s6back5!=null){$s6backs.=$s6back5.",";}
if($s6back6!=null){$s6backs.=$s6back6;}


//tables creation
$studentsdetails="create table if not exists studentsdetails(enrollmentno varchar(15) not null primary key,name varchar(40) not null,branch varchar(40) not null,sem varchar(3) not null,shift varchar(2) not null,year varchar(3) not null,dob date not null,gender varchar(6) not null,bloodgrp varchar(6) not null,mobile varchar(10) not null,email varchar(30) not null);";

$moredetails="create table if not exists moredetails(enrollmentno varchar(15) not null primary key,name varchar(40) not null,jeeprno varchar(15) not null unique,rank varchar(10) not null,ubterrno varchar(15) not null unique,area varchar(5) not null,religion varchar(20) not null,minority varchar(20) null,category varchar(3) not null,subcategory varchar(4) not null,city varchar(30) not null,coraddress varchar(60) not null,peraddress varchar(60) not null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$parentsdetails="create table if not exists parentsdetails(enrollmentno varchar(15) not null primary key,name varchar(40) not null,fathername varchar(40) not null,mothername varchar(40) not null,occupation varchar(20) not null,fmobile varchar(10) not null,fincome varchar(10) not null,fqual varchar(20) not null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$highschool="create table if not exists highschool(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) not null,year varchar(4) not null,totalmarks varchar(4) not null,marksobt varchar(4) not null,percent varchar(5) not null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$intermediate="create table if not exists intermediate(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$graduation="create table if not exists graduation(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$postgraduation="create table if not exists postgraduation(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$semester1="create table if not exists semester1(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,summerorwinter varchar(6) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,backs varchar(40) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$semester2="create table if not exists semester2(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,summerorwinter varchar(6) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,backs varchar(40) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$semester3="create table if not exists semester3(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,summerorwinter varchar(6) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,backs varchar(40) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$semester4="create table if not exists semester4(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,summerorwinter varchar(6) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,backs varchar(40) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$semester5="create table if not exists semester5(enrollmentno varchar(15) not null primary key,name varchar(40) not null,boardoruniversity varchar(80) null,year varchar(4) null,summerorwinter varchar(6) null,totalmarks varchar(4) null,marksobt varchar(4) null,percent varchar(5) null,backs varchar(40) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$semester6="create table if not exists semester6(enrollmentno varchar(15) not null primary key,name varchar(40) not null,backs varchar(40) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

$files="create table if not exists files(enrollmentno varchar(15) not null primary key,name varchar(40) not null,gender varchar(6) not null,branch varchar(255) not null,profileimage varchar(100) not null,incomecertificate varchar(100) null,academiccertificate varchar(100) null,semestercertificate varchar(100) null,date Date not null,studentsign varchar(100) null,parentsign varchar(100) null,FOREIGN KEY ( `enrollmentno` ) REFERENCES `registration`.`studentsdetails` (`enrollmentno`) ON DELETE CASCADE ON UPDATE CASCADE);";

//insertion in tables
$conn->query($studentsdetails);
$studentsdetailsinsert="INSERT INTO `studentsdetails` (`enrollmentno`, `name`, `branch`, `sem`, `shift`, `year`, `dob`,`gender`,`bloodgrp`,`mobile`,`email`) VALUES ('$enrollmentno','$name', '$branch', '$semester', '$shift', '$year', '$dob', '$gender','$bloodgrp','$mobile','$email');";

$conn->query($moredetails);
$moredetailsinsert="INSERT INTO `moredetails` (`enrollmentno`,`name`, `jeeprno`,`rank`, `ubterrno`, `area`,`religion`, `minority`, `category`, `subcategory`,`city`,`coraddress`,`peraddress`) VALUES ('$enrollmentno','$name','$jeeprno', '$rank', '$ubterrno', '$area','$religion', '$minority', '$category', '$subcategory','$city','$coraddress','$peraddress');";

$conn->query($parentsdetails);
$parentsdetailsinsert="INSERT INTO `parentsdetails` (`enrollmentno`,`name`, `fathername`,`mothername`, `occupation`, `fmobile`, `fincome`, `fqual`) VALUES ('$enrollmentno','$name','$fname', '$mname', '$occupation', '$fmobile', '$fincome', '$fqualification');";

$conn->query($highschool);
$highschoolinsert="insert into `highschool`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`totalmarks`,`marksobt`,`percent`) values('$enrollmentno','$name','$hsboard','$hsyear','$hstotalmarks','$hsmarksobt','$hspercent');";

$conn->query($intermediate);
$intermediateinsert="insert into `intermediate`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`totalmarks`,`marksobt`,`percent`) values('$enrollmentno','$name','$imboard','$imyear','$imtotalmarks','$immarksobt','$impercent');";

$conn->query($graduation);
$graduationinsert="insert into `graduation`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`totalmarks`,`marksobt`,`percent`) values('$enrollmentno','$name','$gdboard','$gdyear','$gdtotalmarks','$gdmarksobt','$gdpercent');";

$conn->query($postgraduation);
$postgraduationinsert="insert into `postgraduation`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`totalmarks`,`marksobt`,`percent`) values('$enrollmentno','$name','$pgboard','$pgyear','$pgtotalmarks','$pgmarksobt','$pgpercent');";

$conn->query($semester1);
$semester1insert="insert into `semester1`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`summerorwinter`,`totalmarks`,`marksobt`,`percent`,`backs`) values('$enrollmentno','$name','$s1board','$s1year','$s1sw','$s1totalmarks','$s1marksobt','$s1percent','$s1backs');";

$conn->query($semester2);
$semester2insert="insert into `semester2`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`summerorwinter`,`totalmarks`,`marksobt`,`percent`,`backs`) values('$enrollmentno','$name','$s2board','$s2year','$s2sw','$s2totalmarks','$s2marksobt','$s2percent','$s2backs');";

$conn->query($semester3);
$semester3insert="insert into `semester3`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`summerorwinter`,`totalmarks`,`marksobt`,`percent`,`backs`) values('$enrollmentno','$name','$s3board','$s3year','$s3sw','$s3totalmarks','$s3marksobt','$s3percent','$s3backs');";

$conn->query($semester4);
$semester4insert="insert into `semester4`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`summerorwinter`,`totalmarks`,`marksobt`,`percent`,`backs`) values('$enrollmentno','$name','$s4board','$s4year','$s4sw','$s4totalmarks','$s4marksobt','$s4percent','$s4backs');";

$conn->query($semester5);
$semester5insert="insert into `semester5`(`enrollmentno`,`name`,`boardoruniversity`,`year`,`summerorwinter`,`totalmarks`,`marksobt`,`percent`,`backs`) values('$enrollmentno','$name','$s5board','$s5year','$s5sw','$s5totalmarks','$s5marksobt','$s5percent','$s5backs');";

$conn->query($semester6);
$semester6insert="insert into `semester6`(`enrollmentno`,`name`,`backs`) values('$enrollmentno','$name','$s6backs');";

//uploading files-
//function to move uploaded files
function upload($file_name){
$filename=$_FILES[$file_name]["name"];
$tempname=$_FILES[$file_name]["tmp_name"];
$filetype=pathinfo($filename,PATHINFO_EXTENSION);
$targetfilepath="Files/".$filename;
$allowed_types=array("jpg","png","jpeg","pdf","gif");
if(in_array($filetype,$allowed_types)){
if(move_uploaded_file($tempname,$targetfilepath)){
return true;
  }else{return false;}
 }else{die("Uplaoded File Type Isn't Supported!\nPlease Enter Valid FileType:jpeg,jpg,png,pdf,gif");}
}
//profile image
if(!empty($_FILES["studentimage"]["name"])){
if(upload("studentimage")){}
else{echo "Something went wrong!\nProfile Image Can't Be Uploaded Successfully.";}
}
//income certificate
if(!empty($_FILES["incomecertificate"]["name"])){
if(upload("incomecertificate")){}
else{echo "Something went wrong!\nAnnual Income Certificate Can't Be Uploaded Successfully.";}
}
//academic certificate
if(!empty($_FILES["academiccertificate"]["name"])){
if(upload("academiccertificate")){}
else{echo "Something went wrong!\nAcademic Certificates Can't Be Uploaded Successfully.";}
}
//semester certificate
if(!empty($_FILES["semestercertificate"]["name"])){
if(upload("semestercertificate")){}
else{echo "Something went wrong!\nSemester Certificates Can't Be Uploaded Successfully.";}
}
//student signature
if(!empty($_FILES["studentsign"]["name"])){
if(upload("studentsign")){}
else{echo "Something went wrong!\nStudent Signature Can't Be Uploaded Successfully.";}
}
//parent signature
if(!empty($_FILES["parentsign"]["name"])){
if(upload("parentsign")){}
else{echo "Something went wrong!\nParent Signature Can't Be Uploaded Successfully.";}
}

//setting up variables
$studentimage=$_FILES["studentimage"]["name"];
$incomecertificate=$_FILES["incomecertificate"]["name"];
$academiccertificate=$_FILES["academiccertificate"]["name"];
$semestercertificate=$_FILES["semestercertificate"]["name"];
$studentsign=$_FILES["studentsign"]["name"];
$parentsign=$_FILES["parentsign"]["name"];

$conn->query($files);
$filesinsert="insert into `files`(`enrollmentno`,`name`,`gender`,`branch`,`profileimage`,`incomecertificate`,`academiccertificate`,`semestercertificate`,`date`,`studentsign`,`parentsign`) values('$enrollmentno','$name','$gender','$branch','$studentimage','$incomecertificate','$academiccertificate','$semestercertificate','$decdate','$studentsign','$parentsign');";

//insertion of data
if($conn->query($studentsdetailsinsert)&&$conn->query($moredetailsinsert)&&$conn->query($parentsdetailsinsert)&&$conn->query($highschoolinsert)&&$conn->query($intermediateinsert)&&$conn->query($graduationinsert)&&$conn->query($postgraduationinsert)&&$conn->query($semester1insert)&&$conn->query($semester2insert)&&$conn->query($semester3insert)&&$conn->query($semester4insert)&&$conn->query($semester5insert)&&$conn->query($semester6insert)&&$conn->query($filesinsert)){
echo "<div style=\"width:70%;background:rgb(0,0,0,0.9);color:white;\"><h1 style=\"width:100%;text-align:center;\"> Registration Completed!</h1></div>";
 }
else{
	echo "<p style=\"font-size:30px;width:90%;word-wrap:break-word;background:rgb(0,0,0,0.9);color:white;text-align:center;margin-top:30px;\">$conn->error</p>";
			}
 }
}
?>

<h1 style="background-color: rgb(0,0,0,0.9);color: white;width: 96%;border-radius: 25px;margin: 10px 0px 10px 0px;text-align: center;">Government Polytechnic Kashipur, Distt. U.S. Nagar, Uttarakhand<br>Addmission Form Session 2022-2023</h1>

<form style="width: 96%;" method="post" enctype="multipart/form-data">
		
  <table style="width: 100%;border-spacing:10px;border-collapse:separate;border:2px solid black;margin-bottom:10px;" class="studetails">
    <tr>
     <th colspan="2">Attach Latest Passport Size Image :</th><td colspan="2"><input type="file" name="studentimage" id="studentimage" required></td>
    </tr>
    <tr>
      <th><label for="semester">Semester :</label></th>
      <td><select id="semester" name="semester"><option>I</option><option>II</option><option>III</option><option>IV</option><option>V</option><option>VI</option></select></td>
      <th><label for="year">Year  :</label>&nbsp;<span><select id="year" name="year"><option>I</option><option>II</option><option>III</option></select></span></th>
      <th><label for="shift">Shift :</label>&nbsp;<span><select id="shift" name="shift"><option>I</option><option>II</option></select></span></th>
    </tr>
    <tr>
      <th><label for="branch">Branch :</label></th><td><select id="branch" name="branch"><option>Agriculture</option><option>Chemical</option><option>Chemical Paint</option><option>Civil</option><option>Computer Science & Engineering</option><option>Electronics</option><option>Information Technology</option><option>Mechanical</option><option>Pharmacy</option></select></td>
      <th colspan="2">Gender :<label for="gender">Male </label>&nbsp;<input type="radio" name="gender" value="male">&nbsp;<label for="area">Female </label>&nbsp;<input type="radio" name="gender" value="female"></th>
    </tr>
    <tr>
      <th><label for="name">Name of Student :</label></th>
      <td><input type="text" name="name" id="name" placeholder="Please fill in with Capital Letters" maxlength="50" required></td>
      <th><label for="enrollmentno">Enrollment Number :</label></th>
      <td><input type="tel" name="enrollmentno" id="enrollmentno" minlength="11" placeholder="Enter Enrollment Number" required></td>
    </tr>
    <tr>
    <th><label for="jeeprno">JEEP Roll No :</lable></th><td><input type="tel" name="jeeprno" minlength="8" id="jeeprno" placeholder="Enter JEEP Roll Number" required></td>
    <th><label for="rank">Rank :</lable></th><td><input type="tel" name="rank" id="rank" placeholder="Enter Rank" required></td>
    </tr>
    <tr>
      <th><label for="ubterrno">UBTER Roll No :</lable></th><td><input type="tel" minlength="8" name="ubterrno" id="ubterrno" placeholder="Enter UBTER Roll Number" required></td>
        <th colspan="2">Area :<label for="area">Urban </label><input type="radio" name="area" value="urban">
        <label for="area">Rural </label><input type="radio" name="area" value="rural"><label style ="margin-left:15px;">Religion :</label><select name="religion"><option>Hinduism</option><option>Islam</option><option>Sikhism</option><option>Christianity</option><option>Buddhism</option><option>Jainism</option><option>Other</option></select></th>
    </tr>
    <tr>
      <th><label for="minority">Minority :</label></th><td><input type="text" name="minority" id="minority" placeholder="If yes mention"></td>
      <th><label for="category">Category :</label></th><td><select id="category" name="category"><option>Gen</option><option>OBC</option><option>SC</option><option>ST</option><option>BPL</option></select></td>
    </tr>
    <tr>
      <th><label for="subcategory">Sub-Category :</label></th><td><select id="subcategory" name="subcategory"><option>None</option><option>MP</option><option>FF</option><option>PH</option><option>AF</option></select></td>
      <th><label for="bloodgrp">Blood Group :</label></th><td><select id="bloodgrp" name="bloodgrp"><option>O-ve</option><option>O+ve</option><option>A-ve</option><option>A+ve</option><option>B-ve</option><option>B+ve</option><option>AB-ve</option><option>AB+ve</option></select></td>
    </tr>
    <tr>
      <th><label for="dob">Date of Birth :</label></th><td><input type="date" name="dob" id="dob" placeholder=""></td>
      <th><label for="mobile">Mobile Number (Student) :</label></th><td><input type="tel" minlength="10" maxlength="10" name="mobile" id="mobile" placeholder="Student's Mobile Number" required></td>
    </tr>
    <tr>
      <th><label for="email">Email Address (Student) :</label></th><td><input type="email" name="email" id="email" placeholder="Student's Email Id" required></td>
      <th><label for="fname">Father's/Guardian's Name :</label></th><td><input type="text" name="fname" id="fname" placeholder="Please fill in with Capital Letters" required></td>
    </tr>
    <tr>
      <th><label for="mname">Mother's Name :</label></th><td><input type="text" name="mname" id="mname" placeholder="Please fill in with Capital Letters" required></td>
      <th><label for="occupation">Father's/Guardian's Occupation :</label></th><td><input type="text" name="occupation" id="occupation" placeholder="Please fill in with Capital Letters" required></td>
    </tr>
    <tr>
      <th><label for="fmobile">Father's/Guardian's Mobile Number :</label></th><td><input type="tel" name="fmobile" id="fmobile" minlength="10" maxlength="10" placeholder="Mobile Number" required></td>
      <th><label for="fname">Annual Income of Father/Guardian :</label></th><td><input type="tel" name="fincome" id="fincome" placeholder="Attach Recent Certificate" required><br><br><input type="file" name="incomecertificate"></td>
    </tr>
    <tr>
      <th><label for="fqualification">Father's Max Qualification :</label></th><td><input type="text" name="fqualification" id="fqualification" placeholder="Maximum Qualification" required></td>
      <th><label for="city">City :</label></th><td><input type="text" name="city" placeholder="Enter your city" required></input></td>
    </tr>
    <tr>
      <th><label for="coraddress">Address of Correspondence :</label></th><td><textarea rows="3" cols="24" name="coraddress" id="coraddress" placeholder="(Please fill in with Capital Letters) with Pin Code" required></textarea></td>
      <th><label for="peraddress">Permanent Address :</label></th><td colspan="3"><textarea rows="3" cols="24" name="peraddress" id="peraddress" placeholder="(Please fill in with Capital Letters) with Pin Code" required></textarea></td>
    </tr>
  </table>
  
<table style="width:100%;text-align:center;margin-bottom:10px;" class="eduqual">
	<tr>
	<th colspan="7">Educational Qualification(Please attach all certificates in one pdf document)
	</th>
</tr>
 <tr>
 		<th style="width:30px;">S.N.</th><th>Class</th><th>Board/University</th><th>Year</th><th>Total Marks</th><th>Marks Obtained</th><th>Percent</th>
 </tr>
 <tr>
 		<td style="width:30px;">1.</td><td>High School</td><td><input type="text" name="hsboard" id="hsboard"></td><td><input type="tel" name="hsyear" id="hsyear" minlength="4" maxlength="4"></td><td><input type="tel" name="hstotalmarks" id="hstotalmarks" maxlength="4"></td><td><input type="tel" name="hsmarksobt" id="hsmarksobt" maxlength="4"></td><td><input type="tel" name="hspercent" id="hspercent" maxlength="3" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">2.</td><td>Intermediate</td><td><input type="text" name="imboard" id="imboard"></td><td><input type="tel" name="imyear" id="imyear" minlength="4" maxlength="4"></td><td><input type="tel" name="imtotalmarks" id="imtotalmarks" maxlength="4"></td><td><input type="tel" name="immarksobt" id="immarksobt" maxlength="4"></td><td><input type="tel" name="impercent" maxlength="3" id="impercent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">3.</td><td>Graduation</td><td><input type="text" name="gdboard" id="gdboard"></td><td><input type="tel" name="gdyear" id="gdyear" minlength="4" maxlength="4"></td><td><input type="tel" name="gdtotalmarks" id="gdtotalmarks" maxlength="4"></td><td><input type="tel" name="gdmarksobt" id="gdmarksobt" maxlength="4"></td><td><input type="tel" name="gdpercent" maxlength="3" id="gdpercent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">4.</td><td>Post Graduation</td><td><input type="text" name="pgboard" id="pgboard"></td><td><input type="tel" name="pgyear" id="pgyear" minlength="4" maxlength="4"></td><td><input type="tel" name="pgtotalmarks" id="pgtotalmarks" maxlength="4"></td><td><input type="tel" name="pgmarksobt" id="pgmarksobt" maxlength="4"></td><td><input type="tel" name="pgpercent" maxlength="3" id="pgpercent" step=".01"></td>
 </tr>
 <tr>
  <th colspan="2">Attach Certificate Here :</th>
 		<td colspan="5">
 		<input type="file" name="academiccertificate" id="academiccertificate">
 		</td>
 </tr>
</table>

<table style="width:100%;text-align:center;margin-bottom:10px;" class="diploma">
	<tr>
	<th colspan="8">Diploma(Please attach all certificate in one pdf document)</th>
</tr>
 <tr>
 		<th style="width:30px;">S.N.</th><th>Semester</th><th>Board/University</th><th>Year</th><th>Summer/Winter</th><th>Total Marks</th><th>Marks Obtained</th><th>Percent</th>
 </tr>
 <tr>
 		<td style="width:30px;">1.</td><td>Sem 1</td><td><input type="text" name="s1board" id="s1board"></td><td><input type="tel" name="s1year" id="s1year" minlength="4" maxlength="4"></td><td><input type="text" name="s1sw" minlength="6" maxlength="6" id="s1sw"></td><td><input type="tel" name="s1totalmarks" id="s1totalmarks" maxlength="4"></td><td><input type="tel" name="s1marksobt" id="s1marksobt" maxlength="4"></td><td><input type="tel" name="s1percent" id="s1percent" maxlength="3" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">2.</td><td>Sem 2</td><td><input type="text" name="s2board" id="s2board"></td><td><input type="tel" name="s2year" id="s2year" minlength="4" maxlength="4"></td><td><input type="text" name="s2sw" minlength="6" maxlength="6" id="s2sw"></td><td><input type="tel" name="s2totalmarks" id="s2totalmarks" maxlength="4"></td><td><input type="tel" name="s2marksobt" id="s2marksobt" maxlength="4"></td><td><input type="tel" name="s2percent" maxlength="3" id="s2percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">3.</td><td>Sem 3</td><td><input type="text" name="s3board" id="s3board"></td><td><input type="tel" name="s3year" id="s3year" minlength="4" maxlength="4"></td><td><input type="text" name="s3sw" id="s3sw"></td><td><input type="tel" name="s3totalmarks" id="s3totalmarks" maxlength="4"></td><td><input type="tel" name="s3marksobt" id="s3marksobt" maxlength="4"></td><td><input type="tel" name="s3percent" maxlength="3" id="s3percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">4.</td><td>Sem 4</td><td><input type="text" name="s4board" id="s4board"></td><td><input type="tel" name="s4year" id="s4year" minlength="4" maxlength="4"></td><td><input type="text" name="s4sw" id="s4sw"></td><td><input type="tel" name="s4totalmarks" id="s4totalmarks" maxlength="4"></td><td><input type="tel" name="s4marksobt" id="s4marksobt" maxlength="4"></td><td><input type="tel" name="s4percent" maxlength="3" id="s4percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">5.</td><td>Sem 5</td><td><input type="text" name="s5board" id="s5board"></td><td><input type="tel" name="s5year" id="s5year" minlength="4" maxlength="4"></td><td><input type="text" name="s5sw" id="s5sw"></td><td><input type="tel" name="s5totalmarks" id="s5totalmarks" maxlength="4"></td><td><input type="tel" name="s5marksobt" id="s5marksobt" maxlength="4"></td><td><input type="tel" name="s5percent" maxlength="3" id="s5percent" step=".01"></td>
 </tr>
 <tr>
  <th colspan="2">Attach Certificate Here :</th>
 		<td colspan="6">
 		<input type="file" name="semestercertificate" id="semestercertificate">
 		</td>
 </tr>
</table>

<table style="width:100%;text-align:center;margin-bottom:10px;" class="backpapers">
	<tr>
	<th colspan="6">Back Papers Details</th>
</tr>
 <tr>
 		<th>Semester 1</th><th>Semester 2</th><th>Semester 3</th><th>Semester 4</th><th>Semester 5</th><th>Semester 6</th>
 </tr>
 <tr>
 	<td><input type="tel" minlength="6" maxlength="6" name="s1back1"></td><td><input minlength="6" maxlength="6" type="tel" name="s2back1"></td><td><input type="tel" name="s3back1"></td><td><input minlength="6" maxlength="6" type="tel" name="s4back1"></td><td><input minlength="6" maxlength="6" type="tel" name="s5back1"></td><td><input minlength="6" maxlength="6" type="tel" name="s6back1"></td>
 </tr>
 <tr>
 			<td><input type="tel" minlength="6" maxlength="6" name="s1back2"></td><td><input minlength="6" maxlength="6" type="tel" name="s2back2"></td><td><input minlength="6" maxlength="6" type="tel" name="s3back2"></td><td><input minlength="6" maxlength="6" type="tel" name="s4back2"></td><td><input minlength="6" maxlength="6" type="tel" name="s5back2"></td><td><input minlength="6" maxlength="6" type="tel" name="s6back2"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" name="s1back3"></td><td><input minlength="6" maxlength="6" type="tel" name="s2back3"></td><td><input minlength="6" maxlength="6" type="tel" name="s3back3"></td><td><input minlength="6" maxlength="6" type="tel" name="s4back3"></td><td><input minlength="6" maxlength="6" type="tel" name="s5back3"></td><td><input minlength="6" maxlength="6" type="tel" name="s6back3"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" name="s1back4"></td><td><input minlength="6" maxlength="6" type="tel" name="s2back4"></td><td><input minlength="6" maxlength="6" type="tel" name="s3back4"></td><td><input minlength="6" maxlength="6" type="tel" name="s4back4"></td><td><input minlength="6" maxlength="6" type="tel" name="s5back4"></td><td><input minlength="6" maxlength="6" type="tel" name="s6back4"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" name="s1back5"></td><td><input minlength="6" maxlength="6" type="tel" name="s2back5"></td><td><input minlength="6" maxlength="6" type="tel" name="s3back5"></td><td><input minlength="6" maxlength="6" type="tel" name="s4back5"></td><td><input minlength="6" maxlength="6" type="tel" name="s5back5"></td><td><input minlength="6" maxlength="6" type="tel" name="s6back5"></td>
 </tr>
 <tr>
 			<td><input type="tel" minlength="6" maxlength="6" name="s1back6"></td><td><input minlength="6" maxlength="6" type="tel" name="s2back6"></td><td><input minlength="6" maxlength="6" type="tel" name="s3back6"></td><td><input minlength="6" maxlength="6" type="tel" name="s4back6"></td><td><input minlength="6" maxlength="6" type="tel" name="s5back6"></td><td><input minlength="6" maxlength="6" type="tel" name="s6back6"></td>
 </tr>
</table>

<table style="width:100%;text-align:center;margin-bottom:10px;border:1px solid black;">
	<tr>
		<th colspan="2">Declaration</th>
	</tr>
	<tr>
		<td colspan="2" style="text-align:left;">I do hereby declare that information provided by me is true and if found false then there would be no objection or claim from my side if my admission/registration is cancelled. I shall be full responsible for the recovery of cost of material damaged by me during education period. I have read all rules and regulations. I will abide by all rules and regulations of the institute.</td>
	</tr>
	<tr>
		<td><label>Date :</label><input type="date" name="decdate" required></td>
		<td>Student's Signature :<input type="file" name="studentsign"></td>
	</tr>
</table>

<table style="width:100%;text-align:center;margin-bottom:10px;border:1px solid black;">
	<tr>
		<th colspan="2">Declaration</th>
	</tr>
	<tr>
		<td colspan="2" style="text-align:left;">I have gone through the informations provided by the institute & atleast 80% attendence in class, 50% sessional marks are essential to appear in the semester exam. I also assure that my ward will be not involved in ragging or any other indisciplinary activities. If he is found in any bad activity & is being expelled or any other action is being taken according to the rules by the institute against my ward. I will be responsible for that & I will not go against the action taken by the institute.</td>
	</tr>
	<tr>
		<td><label>Date :</label><input type="date" name="pardecdate" required></td>
		<td>Parent's/Guardian's Signature :<input type="file" name="parentsign"><br>Name :<input type="text" name="parentname" style="border:1px solid black;"></td>
	</tr>
	<tr>
		<td style="padding-top:30px;"><input type="reset" value="reset" style="height:50px;border-radius:10px;width:200px; background:rgb(0,0,0,0.9);color:white;font-size:24px;font-weight:bolder;"></td>
		<td style="padding-top:30px;"><input type="submit" value="submit" name="submit" style="height:50px;border-radius:10px;width:200px; background:rgb(0,0,0,0.9);color:white;font-size:24px;font-weight:bolder;"></td>
	</tr>
</table>
  
</form>
</body>
</html>