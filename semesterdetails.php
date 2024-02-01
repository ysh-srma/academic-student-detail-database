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

<h1 style="width:98%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;margin-top:10px;text-align:center;">Semester Details</h1>

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

$selects1="select * from semester1;";
$selects2="select * from semester3;";
$selects3="select * from semester3;";
$selects4="select * from semester4;";
$selects5="select * from semester5;";
$selects6="select * from semester6;";

$results1=$conn->query($selects1);
$results2=$conn->query($selects2);
$results3=$conn->query($selects3);
$results4=$conn->query($selects4);
$results5=$conn->query($selects5);
$results6=$conn->query($selects6);

if($results1->num_rows>0){
$sno=1;
while(
$rows1=$results1->fetch_assoc() and $rows2=$results2->fetch_assoc() and $rows3=$results3->fetch_assoc() and $rows4=$results4->fetch_assoc() and $rows5=$results5->fetch_assoc() and $rows6=$results6->fetch_assoc()){
echo '<div style="width:98%;border-radius:25px;outline:2px solid white;outline-offset:-2px;padding:0px;margin-bottom:10px;"><table style="width:100%;background:rgba(0,0,0,0.9);color:white;border-radius:25px;">
 <tr>
 		<th>SNo.</th><th>Enrollment No.</th><th>Name</th><th>Semester</th><th>Board/University</th><th>Year</th><th>Summer/Winter</th><th>Total Marks</th><th>Marks Obtained</th><th>Percent</th><th>Backs</th>
</tr>
<tr>
<td rowspan="6">'.$sno.'</td>
<td rowspan="6">'.$rows1['enrollmentno'].'</td><td rowspan="6">'.$rows1['name'].'</td><td>Sem 1</td><td>'.$rows1['boardoruniversity'].'</td><td>'.$rows1['year'].'</td><td>'.$rows1['summerorwinter'].'</td><td>'.$rows1['totalmarks'].'</td><td>'.$rows1['marksobt'].'</td><td>'.$rows1['percent'].'</td><td><div style="width:60px;word-wrap:break-word;">'.$rows1['backs'].'</div></td>
</tr>
<tr>
<td>Sem 2</td><td>'.$rows2['boardoruniversity'].'</td><td>'.$rows2['year'].'</td><td>'.$rows2['summerorwinter'].'</td><td>'.$rows2['totalmarks'].'</td><td>'.$rows2['marksobt'].'</td><td>'.$rows2['percent'].'</td><td><div style="width:60px;word-wrap:break-word;">'.$rows2['backs'].'</div></td>
</tr>
<tr>
<td>Sem 3</td><td>'.$rows3['boardoruniversity'].'</td><td>'.$rows3['year'].'</td><td>'.$rows3['summerorwinter'].'</td><td>'.$rows3['totalmarks'].'</td><td>'.$rows3['marksobt'].'</td><td>'.$rows3['percent'].'</td><td><div style="width:60px;word-wrap:break-word;">'.$rows3['backs'].'</div></td>
</tr>
<tr>
<td>Sem 4</td><td>'.$rows4['boardoruniversity'].'</td><td>'.$rows4['year'].'</td><td>'.$rows4['summerorwinter'].'</td><td>'.$rows4['totalmarks'].'</td><td>'.$rows4['marksobt'].'</td><td>'.$rows4['percent'].'</td><td><div style="width:60px;word-wrap:break-word;">'.$rows4['backs'].'</div></td>
</tr>
<tr>
<td>Sem 5</td><td>'.$rows5['boardoruniversity'].'</td><td>'.$rows5['year'].'</td><td>'.$rows5['summerorwinter'].'</td><td>'.$rows5['totalmarks'].'</td><td>'.$rows5['marksobt'].'</td><td>'.$rows5['percent'].'</td><td><div style="width:60px;word-wrap:break-word;">'.$rows5['backs'].'</div></td>
</tr>
<tr>
<td>Sem 6</td><td colspan="6"></td>
<td><div style="width:60px;word-wrap:break-word;">'.$rows6['backs'].'</div></td>
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