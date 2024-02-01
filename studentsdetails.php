<?php
if(isset($_POST["filter"])){
$gen=$_POST["gen"];
if($gen=="all"){
header("Location:http://localhost/Major%20Project/studentsdetails.php");
exit();
}
if($gen=="male"){
header("Location:http://localhost:/Major%20Project/malestudentsdetails.php");
exit();
}
if($gen=="female"){
header("Location:http://localhost/Major%20Project/femalestudentsdetails.php");
exit();
}
}
 ?>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.0/html2pdf.bundle.js"></script>

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

<h1 style="width:98%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;margin-top:10px;text-align:center;">Students' Details</h1>

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

//enrollment no filter
if(isset($_POST["filter2"])){
$erno=$_POST["erno"];
$selectpi="select `profileimage` from files where enrollmentno='$erno';";
$selectsd="select * from studentsdetails where enrollmentno='$erno';";
$resultsd=$conn->query($selectsd);
$resultpi=$conn->query($selectpi);
if($resultsd->num_rows>0){
echo '<div style="width:98%;border-radius:25px;outline:2px solid white;outline-offset:-2px;padding:0px;"><table border="0" style="width:100%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;table-layout:auto;">
<tr>
<th colspan="13">Total No of Students are : '.$resultsd->num_rows.'</th>
</tr>
<tr>
<th colspan="2">Filter By Branch :</th>
<td colspan="3"><form method="post"><select style="width:150px;background:white;" name="brnch"><option>Agriculture</option><option>Chemical</option><option>Chemical Paint</option><option>Civil</option><option>Computer Science & Engineering</option><option>Electronics</option><option>Information Technology</option><option>Mechanical</option><option>Pharmacy</option></select><input type="submit" value="Go" name="filter3" style="width:30px;"/></form></td>
<th colspan="2">Filter By Gender :</th>
<td colspan="2"><form method="post"><select style="background:white;margin-right:5px;" name="gen"><option>all</option><option>male</option><option>female</option></select><input type="submit" value="Go" name="filter" style="width:30px;"/></form></td>
<th colspan="2">Filter By Enrollment no :</th>
<td colspan="2"><form method="post"><input type="number" name="erno" placeholder="Enter enrollment no. here" style="background:white;width:150px;margin-right:5px;"/><input type="submit" value="Go" name="filter2" style="width:30px;"/></form></td>
</tr>
<tr>
<th>SNo.</th><th>Enrollment No.</th><th>Student\'s Image</th><th>Name</th><th>Branch</th><th>Sem</th><th>Shift</th><th>Year</th><th>DOB</th><th>Gender</th><th>Blood Group</th><th>Mobile No.</th><th>Email Id</th>
</tr>';
$sno=1;
while($row=$resultsd->fetch_assoc() and $rowpi=$resultpi->fetch_assoc()){
echo '<tr>
<td>'.$sno.'</td><td>'.$row['enrollmentno'].'</td><td><img src="Files/'.$rowpi['profileimage'].'" alt="image not available" height="80" width="70"/></td><td>'.$row['name'].'</td><td>'.$row['branch'].'</td><td>'.$row['sem'].'</td><td>'.$row['shift'].'</td><td>'.$row['year'].'</td><td>'.$row['dob'].'</td><td>'.$row['gender'].'</td><td>'.$row['bloodgrp'].'</td><td>'.$row['mobile'].'</td><td><div style="width:100px;word-wrap:break-word;">'.$row['email'].'</div></td>
</tr>';
$sno++;
  }
echo '</table></div>';
}else{echo "<h1>No records available!</h1>";}
exit();
}

//branch filter
if(isset($_POST["filter3"])){
  $brnch=$_POST["brnch"];
  $selectpi="select `profileimage` from files where branch='$brnch';";
  $selectsd="select * from studentsdetails where branch='$brnch';";
  $resultsd=$conn->query($selectsd);
  $resultpi=$conn->query($selectpi);
  if($resultsd->num_rows>0){
  echo '<div style="width:98%;border-radius:25px;outline:2px solid white;outline-offset:-2px;padding:0px;"><table border="0" style="width:100%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;table-layout:auto;">
  <tr>
  <th colspan="13">Total No of Students are : '.$resultsd->num_rows.'</th>
  </tr>
  <tr>
  <th colspan="2">Filter By Branch :</th>
  <td colspan="3"><form method="post"><select style="width:150px;background:white;" name="brnch"><option>Please Select</option></option><option>Agriculture</option><option>Chemical</option><option>Chemical Paint</option><option>Civil</option><option>Computer Science & Engineering</option><option>Electronics</option><option>Information Technology</option><option>Mechanical</option><option>Pharmacy</option></select><input type="submit" value="Go" name="filter3" style="width:30px;"/></form></td>
  <th colspan="2">Filter By Gender :</th>
  <td colspan="2"><form method="post"><select style="background:white;margin-right:5px;" name="gen"><option>all</option><option>male</option><option>female</option></select><input type="submit" value="Go" name="filter" style="width:30px;"/></form></td>
  <th colspan="2">Filter By Enrollment no :</th>
  <td colspan="2"><form method="post"><input type="number" name="erno" placeholder="Enter enrollment no. here" style="background:white;width:150px;margin-right:5px;"/><input type="submit" value="Go" name="filter2" style="width:30px;"/></form></td>
  </tr>
  <tr>
  <th>SNo.</th><th>Enrollment No.</th><th>Student\'s Image</th><th>Name</th><th>Branch</th><th>Sem</th><th>Shift</th><th>Year</th><th>DOB</th><th>Gender</th><th>Blood Group</th><th>Mobile No.</th><th>Email Id</th>
  </tr>';
  $sno=1;
  while($row=$resultsd->fetch_assoc() and $rowpi=$resultpi->fetch_assoc()){
  echo '<tr>
  <td>'.$sno.'</td><td>'.$row['enrollmentno'].'</td><td><img src="Files/'.$rowpi['profileimage'].'" alt="image not available" height="80" width="70"/></td><td>'.$row['name'].'</td><td>'.$row['branch'].'</td><td>'.$row['sem'].'</td><td>'.$row['shift'].'</td><td>'.$row['year'].'</td><td>'.$row['dob'].'</td><td>'.$row['gender'].'</td><td>'.$row['bloodgrp'].'</td><td>'.$row['mobile'].'</td><td><div style="width:100px;word-wrap:break-word;">'.$row['email'].'</div></td>
  </tr>';
  $sno++;
    }
  echo '</table></div>';
  }else{echo "<h1>No records available!</h1>";}
  exit();
  }
  

$selectpi="select `profileimage` from files;";
$selectsd="select * from studentsdetails;";
$resultsd=$conn->query($selectsd);
$resultpi=$conn->query($selectpi);
if($resultsd->num_rows>0){
echo '<div id="data" style="width:98%;border-radius:25px;outline:2px solid white;outline-offset:-2px;padding:0px;"><table id="table" border="0" style="width:100%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;table-layout:auto;">
<tr>
<th colspan="13">Total No of Students are : '.$resultsd->num_rows.'</th>
</tr>
<tr>
<th colspan="2">Filter By Branch :</th>
<td colspan="3"><form method="post"><select style="width:150px;background:white;" name="brnch"><option>Please Select</option></option><option>Agriculture</option><option>Chemical</option><option>Chemical Paint</option><option>Civil</option><option>Computer Science & Engineering</option><option>Electronics</option><option>Information Technology</option><option>Mechanical</option><option>Pharmacy</option></select><input type="submit" value="Go" name="filter3" style="width:30px;"/></form></td>
<th colspan="2">Filter By Gender :</th>
<td colspan="2"><form action="malestudentsdetails.php" method="get"><select style="background:white;margin-right:5px;" name="gen"><option>all</option><option>male</option><option>female</option></select><input type="submit" value="Go" name="filter" style="width:30px;"/></form></td>
<th colspan="2">Filter By Enrollment no :</th>
<td colspan="2"><form method="post"><input style="width:150px;background:white;" type="number" name="erno" placeholder="Enter enrollment no. here" style="background:white;margin-right:5px;"/><input type="submit" value="Go" name="filter2" style="width:30px;"/></form></td>
</tr>
<tr>
<th>SNo.</th><th>Enrollment No.</th><th>Student\'s Image</th><th>Name</th><th>Branch</th><th>Sem</th><th>Shift</th><th>Year</th><th>DOB</th><th>Gender</th><th>Blood Group</th><th>Mobile No.</th><th>Actions</th>
</tr>';
$sno=1;
while($row=$resultsd->fetch_assoc() and $rowpi=$resultpi->fetch_assoc()){
echo '<tr>
<td>'.$sno.'</td><td>'.$row['enrollmentno'].'</td><td><img src="Files/'.$rowpi['profileimage'].'" alt="image not available" height="80" width="70"/></td><td>'.$row['name'].'</td><td>'.$row['branch'].'</td><td>'.$row['sem'].'</td><td>'.$row['shift'].'</td><td>'.$row['year'].'</td><td>'.$row['dob'].'</td><td>'.$row['gender'].'</td><td>'.$row['bloodgrp'].'</td><td>'.$row['mobile'].'</td><td><a style="margin-right:10px;" href="showfulldetails.php?ern='.$row['enrollmentno'].'"><button style="width:70px;border:2px solid white;border-radius:5px;background:red;color:white;font-weight:bolder;">Show</button></a><a href="updatedetails.php?ern='.$row['enrollmentno'].'"><button style="width:70px;border:2px solid white;border-radius:5px;background:red;color:white;font-weight:bolder;">Edit</button></a></td>
</tr>';
$sno++;
  }
echo '</table></div>';
}else{echo "<h1>No records available!</h1>";}
 ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>