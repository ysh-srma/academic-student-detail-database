<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment Form</title>
    <style>
      *{margin: 0px;padding: 0px;font-size: 14px;}
      body{width: 100vw;display: flex;flex-direction: column;align-items: center;}

.rdropdown{position:relative;display:inline-block;}
.rdropdown-content{position:absolute;display:none;right:0px;width:max-content;box-shadow:0px 20px 20px 0px rgba(0,0,0,0.5);z-index: 1;background-color:rgba(180,40,40,0.9);border-radius:20px;border:2px solid blue;padding:0px 10px 0px 10px;}
a.link{display:block;color:white;text-decoration: none;text-align:center;padding:10px 15px 10px 15px;margin-top:5px;font-weight:bolder;font-size:20px;border:2px solid blue;border-radius:10px;background-color:red;}
a.link:hover{color:white;background-color:blue;border:2px solid white;}
.rdropdown:hover
.rdropdown-content{display:block;}

.enroll,.rdropbtn{color:white;border:2px solid white;border-radius:10px;font-weight:bolder;background-color:red;font-size:20px;padding:10px;width:150px;}
.enroll:hover,.rdropbtn:hover{background:blue;}

#searching input,#searching select{border:2px solid black;background-color:white;}
#searching{border-collapse:separate;border-spacing:10px;border:2px solid black;padding:10px;}
#searching th{width:25%;}

#result th{border:2px solid white;}
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

<h1 style="background-color: rgb(0,0,0,0.9);color: white;width: 96%;border-radius: 25px;margin: 10px 0px 10px 0px;text-align: center;">Search Records</h1>

<form style="width: 90%;" method="post">
  <table style="width:100%;" id="searching">
    <tr>
      <th>Enrollment Number :</th><th><input type="tel" name="enrollmentno" minlength="11"></th>
      <th>Branch :</th><th><select name="branch"><option></option><option>Agriculture</option><option>Chemical</option><option>Chemical Paint</option><option>Civil</option><option>Computer Science & Engineering</option><option>Electronics</option><option>Information Technology</option><option>Mechanical</option><option>Pharmacy</option></select></th>
    </tr>
    <tr>
					<th>Year :</th><th><select name="year"><option></option><option>I</option><option>II</option><option>III</option></select></th>
					<th>Semester :</th><th><select name="sem"><option></option><option>I</option><option>II</option><option>III</option><option>IV</option><option>V</option><option>VI</option></select></th>
    </tr>
			<tr>
				<th>Catgory :</th><th><select name="category"><option></option><option>Gen</option><option>OBC</option><option>SC</option><option>ST</option><option>BPL</option></select></th>
				<th>Religion :</th><th><select name="religion"><option></option><option>Hinduism</option><option>Islam</option><option>Sikhism</option><option>Christianity</option><option>Buddhism</option><option>Jainism</option><option>Other</option></select></th>
			</tr>
			<tr>
				<th>Gender :</th><th><select name="gender"><option></option><option>male</option><option>female</option></select></th>
				<th>City :</th><th><input type="text" name="city"/></th>
			</tr>
			<tr>
				<th colspan="4"><input style="padding:3px;font-weight:bolder;" type="submit" value="search" name="search"/></th>
			</tr>
  </table>
</form>

<?php
extract($_POST);
if(!empty($enrollmentno) or !empty($branch) or !empty($year) or !empty($sem) or !empty($gender) or !empty($city) or !empty($category) or !empty($religion)){
$search="select f.profileimage, sd.`enrollmentno`,sd.`name`,sd.`gender`,sd.`branch`,sd.`year`,sd.`sem`,md.`category`,md.`religion`,md.`city` from files as f,studentsdetails as sd,moredetails as md where ";
	if($enrollmentno!=""){$search.="f.enrollmentno="."'$enrollmentno' and "."sd.enrollmentno="."'$enrollmentno' and md.enrollmentno="."'$enrollmentno' and ";}
	if($branch!=""){$search.="sd.branch="."'$branch' and sd.enrollmentno=md.enrollmentno and ";}
	if($year!=""){$search.="sd.year="."'$year' and sd.enrollmentno=md.enrollmentno and ";}
	if($sem!=""){$search.="sd.sem="."'$sem' and sd.enrollmentno=md.enrollmentno and ";}
	if($gender!=""){$search.="sd.gender="."'$gender' and sd.enrollmentno=md.enrollmentno and ";}
	if($category!=""){$search.="md.category="."'$category' and sd.enrollmentno=md.enrollmentno and ";}
	if($religion!=""){$search.="md.religion="."'$religion' and sd.enrollmentno=md.enrollmentno and ";}
	if($city!=""){$search.="md.city="."'$city' and sd.enrollmentno=md.enrollmentno and ";}
$search.="f.enrollmentno=sd.enrollmentno";

$conn=new mysqli("localhost","root","");
if(!$conn){
				die("Connection Failed! "+$conn->connect_error);
}
$showdb="show databases;";
$result=$conn->query($showdb);
if($result->num_rows>0){
while($data=$result->fetch_assoc()){
$key=array_search("registration",$data);
if($key=="Database"){
$conn->select_db("registration");
break;
    }
  }
}else{echo "<h1>No databases available!</h1>";}
if($key!="Database"){echo "<h1>Database not available!</h1>";}

$result=$conn->query($search);
if($result->num_rows>0){
echo '<div style="width:98%;border-radius:25px;outline:2px solid white;outline-offset:-2px;padding:0px;margin-top:10px;"><table id="result" style="width:100%;background:rgba(0,0,0,0.9);color:white;border:2px solid white;border-radius:25px;text-align:center;">
<tr>
<th colspan="13">Total No of Students are : '.$resultsd->num_rows.'</th>
</tr>
<tr>
<th>SNo.</th><th>Student\'s Image</th><th>Enrollment No.</th><th>Name</th><th>Gender</th><th>Branch</th><th>Year</th><th>Sem</th><th>cate<br>gory</th><th>Religion</th><th>City</th>
</tr>';
$sno=1;

while($row=$result->fetch_assoc()){
	echo '<tr>
<th>'.$sno.'</th><th><img src="Files/'.$row['profileimage'].'" height="80" width="70" alt="image not available"></img></th><th>'.$row['enrollmentno'].'</th><th>'.$row['name'].'</th><th>'.$row['gender'].'</th><th>'.$row['branch'].'</th><th>'.$row['year'].'</th><th>'.$row['sem'].'</th><th>'.$row['category'].'</th><th>'.$row['religion'].'</th><th>'.$row['city'].'</th>
</tr>';
		}
echo '</table></div>';
	}else{echo '<h1 style="background-color: rgb(0,0,0,0.9);color: white;width: 96%;border-radius: 25px;margin: 10px 0px 10px 0px;text-align: center;">No results found!</h1>';}
}
 ?>

</body>
</html>