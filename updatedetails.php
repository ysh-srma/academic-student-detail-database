<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment Form</title>
    <style>
				*{margin: 0px;padding: 0px;font-size: 14px;}
      body{width: 100vw;display: flex;flex-direction: column;align-items: center;border:1px solid black;}

.rdropdown{position:relative;display:inline-block;}
.rdropdown-content{position:absolute;display:none;right:0px;width:max-content;box-shadow:0px 20px 20px 0px rgba(0,0,0,0.5);z-index: 1;background-color:rgba(180,40,40,0.9);border-radius:20px;border:2px solid blue;padding:0px 10px 0px 10px;}
a.link{display:block;color:white;text-decoration: none;text-align:center;padding:10px 15px 10px 15px;margin-top:5px;font-weight:bolder;font-size:20px;border:2px solid blue;border-radius:10px;background-color:red;}
a.link:hover{color:white;background-color:blue;border:2px solid white;}
.rdropdown:hover
.rdropdown-content{display:block;}

.enroll,.rdropbtn{color:white;border:2px solid white;border-radius:10px;font-weight:bolder;background-color:red;font-size:20px;padding:10px;width:150px;}
.enroll:hover,.rdropbtn:hover{background:blue;}

table.studetails input[type="text"],input[type="email"],input[type="tel"],input[type="date"]{height:50px;border:1px solid black; background:white;}

table.studetails{width:25%;}
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
if(isset($_POST["update"])){
$conn=new mysqli("localhost","root","","registration");
if(!$conn){
				die("Connection Failed! "+$conn->connect_error);
}
else{
$ern=$_GET['ern'];
extract($_POST);

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

$updatefi="UPDATE `files` SET `profileimage`='$studentimage',`incomecertificate`='$incomecertificate',`academiccertificate`='$academiccertificate',`semestercertificate`='$semestercertificate',`date`='$decdate',`studentsign`='$studentsign',`parentsign`='$parentsign' WHERE enrollmentno=$ern;";

$updatesd="UPDATE `studentsdetails` SET `sem`='$semester',`shift`='$shift',`year`='$year',`bloodgrp`='$bloodgrp',`mobile`='$mobile',`email`='$email' where enrollmentno=$ern;";

$updatepd="UPDATE `parentsdetails` SET `occupation`='$occupation',`fmobile`='$fmobile',`fincome`='$fincome' where enrollmentno=$ern;";

$updatemd="UPDATE `moredetails` SET `city`='$city',`coraddress`='$coraddress',`peraddress`='$peraddress' where enrollmentno=$ern;";

$updatehs="UPDATE `highschool` SET `boardoruniversity`='$hsboard',`year`='$hsyear',`totalmarks`='$hstotalmarks',`marksobt`='$hsmarksobt',`percent`='$hspercent' where enrollmentno=$ern;";

$updateim="UPDATE `intermediate` SET `boardoruniversity`='$imboard',`year`='$imyear',`totalmarks`='$imtotalmarks',`marksobt`='$immarksobt',`percent`='$impercent' where enrollmentno=$ern;";

$updategd="UPDATE `graduation` SET `boardoruniversity`='$gdboard',`year`='$gdyear',`totalmarks`='$gdtotalmarks',`marksobt`='$gdmarksobt',`percent`='$gdpercent' where enrollmentno=$ern;";

$updatepg="UPDATE `postgraduation` SET `boardoruniversity`='$pgboard',`year`='$pgyear',`totalmarks`='$pgtotalmarks',`marksobt`='$pgmarksobt',`percent`='$pgpercent' where enrollmentno=$ern;";

$updates1="UPDATE `semester1` SET `boardoruniversity`='$s1board',`year`='$s1year',`summerorwinter`='$s1sw',`totalmarks`='$s1totalmarks',`marksobt`='$s1marksobt',`percent`='$s1percent',`backs`='$s1backs' where enrollmentno=$ern;";

$updates2="UPDATE `semester2` SET `boardoruniversity`='$s2board',`year`='$s2year',`summerorwinter`='$s2sw',`totalmarks`='$s2totalmarks',`marksobt`='$s2marksobt',`percent`='$s2percent',`backs`='$s2backs' where enrollmentno=$ern;";

$updates3="UPDATE `semester3` SET `boardoruniversity`='$s3board',`year`='$s3year',`summerorwinter`='$s3sw',`totalmarks`='$s3totalmarks',`marksobt`='$s3marksobt',`percent`='$s3percent',`backs`='$s3backs' where enrollmentno=$ern;";

$updates4="UPDATE `semester4` SET `boardoruniversity`='$s4board',`year`='$s4year',`summerorwinter`='$s4sw',`totalmarks`='$s4totalmarks',`marksobt`='$s4marksobt',`percent`='$s4percent',`backs`='$s4backs' where enrollmentno=$ern;";

$updates5="UPDATE `semester5` SET `boardoruniversity`='$s5board',`year`='$s5year',`summerorwinter`='$s5sw',`totalmarks`='$s5totalmarks',`marksobt`='$s5marksobt',`percent`='$s5percent',`backs`='$s5backs' where enrollmentno=$ern;";

$updates6="UPDATE `semester6` SET `backs`='$s6backs' where enrollmentno=$ern;";

//updation
if($conn->query($updatefi) and $conn->query($updatesd) and $conn->query($updatepd) and $conn->query($updatemd) and $conn->query($updatehs) and $conn->query($updateim) and $conn->query($updategd) and $conn->query($updatepg) and $conn->query($updates1) and $conn->query($updates2) and $conn->query($updates3) and $conn->query($updates4) and $conn->query($updates5) and $conn->query($updates6)){
		echo "<div style=\"width:70%;background:rgb(0,0,0,0.9);color:white;\"><h1 style=\"width:100%;text-align:center;\">Successfully Updated!</h1></div>";exit();
			}
else{
			echo "<p style=\"font-size:30px;width:90%;word-wrap:break-word;background:rgb(0,0,0,0.9);color:white;text-align:center;margin-top:30px;\">$conn->error</p>";exit();
				}
		}
	}
?>

  <?php
  $conn=new mysqli("localhost","root","","registration");
  if(!$conn){
          die("Connection Failed! "+$conn->connect_error);
  }

$ern=$_GET["ern"];

$selectpi="select `profileimage` from files where enrollmentno=$ern;";
$resultpi=$conn->query($selectpi);

$selectsd="select * from studentsdetails where enrollmentno=$ern;";
$resultsd=$conn->query($selectsd);

$selectpd="select * from parentsdetails where enrollmentno=$ern";
$resultpd=$conn->query($selectpd);

$selectmd="select * from moredetails where enrollmentno=$ern";
$resultmd=$conn->query($selectmd);

$selecths="select * from highschool where enrollmentno=$ern;";
$selectim="select * from intermediate where enrollmentno=$ern;";
$selectgd="select * from graduation where enrollmentno=$ern;";
$selectpg="select * from postgraduation where enrollmentno=$ern;";

$resulths=$conn->query($selecths);
$resultim=$conn->query($selectim);
$resultgd=$conn->query($selectgd);
$resultpg=$conn->query($selectpg);

$selects1="select * from semester1 where enrollmentno=$ern;";
$selects2="select * from semester3 where enrollmentno=$ern;";
$selects3="select * from semester3 where enrollmentno=$ern;";
$selects4="select * from semester4 where enrollmentno=$ern;";
$selects5="select * from semester5 where enrollmentno=$ern;";
$selects6="select * from semester6 where enrollmentno=$ern;";
$results1=$conn->query($selects1);
$results2=$conn->query($selects2);
$results3=$conn->query($selects3);
$results4=$conn->query($selects4);
$results5=$conn->query($selects5);
$results6=$conn->query($selects6);

if($resultsd->num_rows>0){
  while($rowpi=$resultpi->fetch_assoc() and $rowsd=$resultsd->fetch_assoc() and $rowpd=$resultpd->fetch_assoc() and $rowmd=$resultmd->fetch_assoc() and $rowhs=$resulths->fetch_assoc() and $rowim=$resultim->fetch_assoc() and $rowgd=$resultgd->fetch_assoc() and $rowpg=$resultpg->fetch_assoc() and $rows1=$results1->fetch_assoc() and $rows2=$results2->fetch_assoc() and $rows3=$results3->fetch_assoc() and $rows4=$results4->fetch_assoc() and $rows5=$results5->fetch_assoc() and $rows6=$results6->fetch_assoc()){

//separating backs
$s1explode=explode(',',$rows1['backs']);
$s2explode=explode(',',$rows2['backs']);
$s3explode=explode(',',$rows3['backs']);
$s4explode=explode(',',$rows4['backs']);
$s5explode=explode(',',$rows5['backs']);
$s6explode=explode(',',$rows6['backs']);

    echo '<h1 style="background-color: rgb(0,0,0,0.9);color: white;width: 96%;border-radius: 25px;margin: 10px 0px 10px 0px;text-align: center;">Government Polytechnic Kashipur, Distt. U.S. Nagar, Uttarakhand<br>Addmission Form Session 2022-2023</h1>

<form style="width: 96%;" method="post" enctype="multipart/form-data">
		
  <table style="width: 100%;border-spacing:10px;border-collapse:separate;border:2px solid black;margin-bottom:10px;" class="studetails">
    <tr>
     <th colspan="2">Attach Latest Passport Size Image :</th><td colspan="2"><input type="file" name="studentimage" id="studentimage" required></td>
    </tr>
    <tr>
      <th><label for="semester">Semester :</label></th>
      <td><select id="semester" name="semester"><option>'.$rowsd['sem'].'</option><option>I</option><option>II</option><option>III</option><option>IV</option><option>V</option><option>VI</option></select></td>
      <th><label for="year">Year  :</label>&nbsp;<span><select id="year" name="year"><option>'.$rowsd['year'].'</option><option>I</option><option>II</option><option>III</option></select></span></th>
      <th><label for="shift">Shift :</label>&nbsp;<span><select id="shift" name="shift"><option>'.$rowsd['shift'].'</option>
<option>I</option><option>II</option></select></span></th>
    </tr>
    <tr>
      <th><label for="branch">Branch :</label></th><th>'.$rowsd['branch'].'</th>
      <th>Gender :</th><th>'.$rowsd['gender'].'</th>
    </tr>
    <tr>
      <th><label for="name">Name of Student :</label></th>
      <th>'.$rowsd['name'].'</th>
      <th><label for="enrollmentno">Enrollment Number :</label></th>
      <th>'.$rowsd['enrollmentno'].'</th>
    </tr>
    <tr>
    <th><label for="jeeprno">JEEP Roll No :</label></th><th>'.$rowsd['jeeprno'].'</th>
    <th><label for="rank">Rank :</label></th><th>'.$rowmd['rank'].'</th>
    </tr>
    <tr>
      <th><label for="ubterrno">UBTER Roll No :</label></th><th>'.$rowmd['ubterrno'].'</th>
        <th colspan="2">Area :'.$rowmd['area'].'<label style ="margin-left:10px;">Religion :</label>'.$rowmd['rank'].'</th>
    </tr>
    <tr>
      <th><label for="minority">Minority :</label></th><th>'.$rowmd['minority'].'</th></td>
      <th><label for="category">Category :</label></th><th>'.$rowmd['category'].'</th>
    </tr>
    <tr>
      <th><label for="subcategory">Sub-Category :</label></th><th>'.$rowmd['subcategory'].'</th>
      <th><label for="bloodgrp">Blood Group :</label></th><td><select id="bloodgrp" name="bloodgrp"><option>'.$rowsd['bloodgrp'].'</option><option>O-ve</option><option>O+ve</option><option>A-ve</option><option>A+ve</option><option>B-ve</option><option>B+ve</option><option>AB-ve</option><option>AB+ve</option></select></td>
    </tr>
    <tr>
      <th><label for="dob">Date of Birth :</label></th><th>'.$rowsd['dob'].'</th>
      <th><label for="mobile">Mobile Number (Student) :</label></th><td><input type="tel" minlength="10" maxlength="10" name="mobile" value="'.$rowsd['mobile'].'" required></td>
    </tr>
    <tr>
      <th><label for="email">Email Address (Student) :</label></th><td><input type="email" name="email" value="'.$rowsd['email'].'" required></td>
      <th><label for="fname">Father\'s/Guardian\'s Name :</label></th><th>'.$rowpd['fathername'].'</th>
    </tr>
    <tr>
      <th><label for="mname">Mother\'s Name :</label></th><th>'.$rowpd['mothername'].'</th>
      <th><label for="occupation">Father\'s/Guardian\'s Occupation :</label></th><td><input type="text" name="occupation" value="'.$rowpd['occupation'].'" required></td>
    </tr>
    <tr>
      <th><label for="fmobile">Father\'s/Guardian\'s Mobile Number :</label></th><td><input type="tel" name="fmobile" minlength="10" maxlength="10" value="'.$rowpd['fmobile'].'" required></td>
      <th><label for="fname">Annual Income of Father/Guardian :</label></th><td><input type="tel" name="fincome" value="'.$rowpd['fincome'].'" required><br><br><input type="file" name="incomecertificate"></td>
    </tr>
    <tr>
      <th><label for="fqualification">Father\'s Max Qualification :</label></th><th>'.$rowpd['fqual'].'</th>
      <th><label for="city">City :</label></th><td><input type="text" name="city" value="'.$rowmd['city'].'"></input></td>
    </tr>
    <tr>
      <th><label for="coraddress">Address of Correspondence :</label></th><td><textarea rows="3" cols="24" name="coraddress" required>'.$rowmd['coraddress'].'</textarea></td>
      <th><label for="peraddress">Permanent Address :</label></th><td colspan="3"><textarea rows="3" cols="24" name="peraddress" required>'.$rowmd['peraddress'].'</textarea></td>
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
 		<td style="width:30px;">1.</td><td>High School</td><td><input type="text" name="hsboard" value="'.$rowhs['boardoruniversity'].'"></td><td><input type="tel" name="hsyear" value="'.$rowhs['year'].'" maxLength="4"></td><td><input type="tel" name="hstotalmarks" value="'.$rowhs['totalmarks'].'" id="hstotalmarks" maxlength="4"></td><td><input type="tel" name="hsmarksobt" id="hsmarksobt" value="'.$rowhs['marksobt'].'" maxlength="4"></td><td><input type="tel" name="hspercent" value="'.$rowhs['percent'].'" id="hspercent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">2.</td><td>Intermediate</td><td><input type="text" name="imboard" value="'.$rowim['boardoruniversity'].'" id="imboard"></td><td><input type="tel" name="imyear" value="'.$rowim['year'].'" id="imyear" maxlength="4"></td><td><input type="tel" name="imtotalmarks" value="'.$rowim['totalmarks'].'" id="imtotalmarks" maxlength="4"></td><td><input type="tel" name="immarksobt" value="'.$rowim['marksobt'].'" id="immarksobt" maxlength="4"></td><td><input type="tel" name="impercent" value="'.$rowim['percent'].'" id="impercent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">3.</td><td>Graduation</td><td><input type="text" name="gdboard" value="'.$rowgd['boardoruniversity'].'" id="gdboard"></td><td><input type="tel" name="gdyear" value="'.$rowgd['year'].'" id="gdyear" maxlength="4"></td><td><input type="tel" name="gdtotalmarks" value="'.$rowgd['totalmarks'].'" id="gdtotalmarks" maxlength="4"></td><td><input type="tel" name="gdmarksobt" value="'.$rowgd['marksobt'].'" id="gdmarksobt" maxlength="4"></td><td><input type="tel" name="gdpercent" value="'.$rowgd['percent'].'" value="'.$rowgd['gdpercent'].'" id="gdpercent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">4.</td><td>Post Graduation</td><td><input type="text" name="pgboard" value="'.$rowpg['boardoruniversity'].'" id="pgboard"></td><td><input type="tel" name="pgyear" value="'.$rowpg['year'].'" id="pgyear" maxlength="4"></td><td><input type="tel" name="pgtotalmarks" value="'.$rowpg['totalmarks'].'" id="pgtotalmarks" maxlength="4"></td><td><input type="tel" name="pgmarksobt" value="'.$rowpg['marksobt'].'" id="pgmarksobt" maxlength="4"></td><td><input type="tel" name="pgpercent" value="'.$rowpg['percent'].'" id="pgpercent" step=".01"></td>
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
 		<td style="width:30px;">1.</td><td>Sem 1</td><td><input type="text" name="s1board" value="'.$rows1['boardoruniversity'].'" id="s1board"></td><td><input type="tel" name="s1year" value="'.$rows1['year'].'" id="s1year" maxlength="4"></td><td><input type="text" name="s1sw" value="'.$rows1['summerorwinter'].'" id="s1sw"></td><td><input type="tel" name="s1totalmarks"
value="'.$rows1['totalmarks'].'" id="s1totalmarks" maxlength="4"></td><td><input type="tel" name="s1marksobt" value="'.$rows1['marksobt'].'" id="s1marksobt" maxlength="4"></td><td><input type="tel" name="s1percent" value="'.$rows1['percent'].'" id="s1percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">2.</td><td>Sem 2</td><td><input type="text" name="s2board" value="'.$rows2['boardoruniversity'].'" id="s2board"></td><td><input type="tel" name="s2year" value="'.$rows2['year'].'" id="s2year" maxlength="4"></td><td><input type="text" name="s2sw" value="'.$rows2['summerorwinter'].'" id="s2sw"></td><td><input type="tel" name="s2totalmarks" value="'.$rows2['totalmarks'].'" id="s2totalmarks" maxlength="4"></td><td><input type="tel" name="s2marksobt" value="'.$rows2['marksobt'].'" id="s2marksobt" maxlength="4"></td><td><input type="tel" name="s2percent" value="'.$rows2['percent'].'" id="s2percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">3.</td><td>Sem 3</td><td><input type="text" name="s3board" value="'.$rows3['boardoruniversity'].'" id="s3board"></td><td><input type="tel" name="s3year" value="'.$rows3['year'].'" id="s3year" maxlength="4"></td><td><input type="text" name="s3sw" value="'.$rows3['summerorwinter'].'" id="s3sw"></td><td><input type="tel" name="s3totalmarks" value="'.$rows3['totalmarks'].'" id="s3totalmarks" maxlength="4"></td><td><input type="tel" name="s3marksobt" value="'.$rows3['marksobt'].'" id="s3marksobt" maxlength="4"></td><td><input type="tel" name="s3percent" value="'.$rows3['percent'].'" id="s3percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">4.</td><td>Sem 4</td><td><input type="text" name="s4board" value="'.$rows4['boardoruniversity'].'" id="s4board"></td><td><input type="tel" name="s4year" value="'.$rows4['year'].'" id="s4year" maxlength="4"></td><td><input type="text" name="s4sw" value="'.$rows4['summerorwinter'].'" id="s4sw"></td><td><input type="tel" name="s4totalmarks" value="'.$rows4['totalmarks'].'" id="s4totalmarks" maxlength="4"></td><td><input type="tel" name="s4marksobt" value="'.$rows4['marksobt'].'" id="s4marksobt" maxlength="4"></td><td><input type="tel" name="s4percent" value="'.$rows4['percent'].'" id="s4percent" step=".01"></td>
 </tr>
 <tr>
 		<td style="width:30px;">5.</td><td>Sem 5</td><td><input type="text" name="s5board" value="'.$rows5['boardoruniversity'].'" id="s5board"></td><td><input type="tel" name="s5year" value="'.$rows5['year'].'" id="s5year" maxlength="4"></td><td><input type="text" name="s5sw" value="'.$rows5['summerorwinter'].'" id="s5sw"></td><td><input type="tel" name="s5totalmarks" value="'.$rows5['totalmarks'].'" id="s5totalmarks" maxlength="4"></td><td><input type="tel" name="s5marksobt" value="'.$rows5['marksobt'].'" id="s5marksobt" maxlength="4"></td><td><input type="tel" name="s5percent" value="'.$rows5['percent'].'" id="s5percent" step=".01"></td>
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
	<th colspan="6">Back Details</th>
</tr>
 <tr>
 		<th>Semester 1</th><th>Semester 2</th><th>Semester 3</th><th>Semester 4</th><th>Semester 5</th><th>Semester 6</th>
 </tr>
 <tr>
 	<td><input minlength="6" maxlength="6" type="tel" value="'.$s1explode[0].'" name="s1back1"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s2explode[0].'" name="s2back1"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s3explode[0].'" name="s3back1"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s4explode[0].'" name="s4back1"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s5explode[0].'" name="s5back1"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s6explode[0].'" name="s6back1"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" value="'.$s1explode[1].'" name="s1back2"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s2explode[1].'" name="s2back2"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s3explode[1].'" name="s3back2"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s4explode[1].'" name="s4back2"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s5explode[1].'" name="s5back2"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s6explode[1].'" name="s6back2"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" value="'.$s1explode[2].'" name="s1back3"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s2explode[2].'" name="s2back3"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s3explode[2].'" name="s3back3"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s4explode[2].'" name="s4back3"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s5explode[2].'" name="s5back3"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s6explode[2].'" name="s6back3"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" value="'.$s1explode[3].'" name="s1back4"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s2explode[3].'" name="s2back4"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s3explode[3].'" name="s3back4"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s4explode[3].'" name="s4back4"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s5explode[3].'" name="s5back4"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s6explode[3].'" name="s6back4"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" value="'.$s1explode[4].'" name="s1back5"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s2explode[4].'" name="s2back5"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s3explode[4].'" name="s3back5"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s4explode[4].'" name="s4back5"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s5explode[4].'" name="s5back5"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s6explode[4].'" name="s6back5"></td>
 </tr>
 <tr>
 			<td><input minlength="6" maxlength="6" type="tel" value="'.$s1explode[5].'" name="s1back6"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s2explode[5].'" name="s2back6"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s3explode[5].'" name="s3back6"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s4explode[5].'" name="s4back6"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s5explode[5].'" name="s5back6"></td><td><input minlength="6" maxlength="6" type="tel" value="'.$s6explode[5].'" name="s6back6"></td>
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
		<td>Student\'s Signature :<input type="file" name="studentsign"></td>
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
		<td>Parent\'s/Guardian\'s Signature :<input type="file" name="parentsign"><br>Name :<input type="text" name="parentname" style="border:1px solid black;"></td>
	</tr>
	<tr>
		<td colspan="2" style="padding-top:30px;text-align:center;"><input type="submit" value="Update" name="update" style="height:50px;border-radius:10px;width:200px; background:rgb(0,0,0,0.9);color:white;font-size:24px;font-weight:bolder;"></td>
	</tr>
</table>
</form>';
 }
}
  ?>
</body>
</html>