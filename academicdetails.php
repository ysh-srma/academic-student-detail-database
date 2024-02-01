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
table tr th,table tr td{border:2px solid white;text-align:center;padding:5px;}
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

<h1 style="width:98%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;margin-top:10px;text-align:center;">Academic Details</h1>

<?php 
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

$selecths="select * from highschool;";
$selectim="select * from intermediate;";
$selectgd="select * from graduation;";
$selectpg="select * from postgraduation;";

$resulths=$conn->query($selecths);
$resultim=$conn->query($selectim);
$resultgd=$conn->query($selectgd);
$resultpg=$conn->query($selectpg);

if($resulths->num_rows>0){
$sno=1;
while(
$rowhs=$resulths->fetch_assoc() and $rowim=$resultim->fetch_assoc() and $rowgd=$resultgd->fetch_assoc() and $rowpg=$resultpg->fetch_assoc()){
echo '<div style="width:98%;border-radius:25px;outline:2px solid white;outline-offset:-2px;padding:0px;margin-bottom:10px;"><table style="width:100%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;">
 <tr>
 		<th>SNo.</th><th>Enrollment No.</th><th>Name</th><th>Class</th><th>Board/University</th><th>Year</th><th>Total Marks</th><th>Marks Obtained</th><th>Percent</th>
</tr>
<tr>
<td rowspan="4">'.$sno.'</td>
<td rowspan="4">'.$rowhs['enrollmentno'].'</td><td rowspan="4">'.$rowhs['name'].'</td><td>High School</td><td>'.$rowhs['boardoruniversity'].'</td><td>'.$rowhs['year'].'</td><td>'.$rowhs['totalmarks'].'</td><td>'.$rowhs['marksobt'].'</td><td>'.$rowhs['percent'].'</td>
</tr>
<tr>
<td>Intermediate</td><td>'.$rowim['boardoruniversity'].'</td><td>'.$rowim['year'].'</td><td>'.$rowim['totalmarks'].'</td><td>'.$rowim['marksobt'].'</td><td>'.$rowim['percent'].'</td>
</tr>
<tr>
<td>Graduation</td><td>'.$rowgd['boardoruniversity'].'</td><td>'.$rowgd['year'].'</td><td>'.$rowgd['totalmarks'].'</td><td>'.$rowgd['marksobt'].'</td><td>'.$rowgd['percent'].'</td>
</tr>
<tr>
<td>Post Graduation</td><td>'.$rowpg['boardoruniversity'].'</td><td>'.$rowpg['year'].'</td><td>'.$rowpg['totalmarks'].'</td><td>'.$rowpg['marksobt'].'</td><td>'.$rowpg['percent'].'</td>
</tr>
</table></div>';
$sno++;
  }
}else{echo "<h1>No records available!</h1>";}
 ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>