<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment Form</title>
    <style>
					*{font-size:12px;}
      body{width;display: flex;flex-direction: column;align-items: center;}
      table.table tr th{border:2px solid black;}
					#details th{width:25%;}
					#details{border-spacing:10px;}
    </style>
</head>
<body>
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
    echo '<div style="width:90%;border:2px solid black;padding:5px;margin-top:20px;"><table id="details" style="width: 100%;text-align:left;border:3px solid black;margin-bottom:10px;">
    <tr>
      <th><img style="margin:10px 0px 0px 10px;border:2px solid black;" src="Files/'.$rowpi['profileimage'].'" alt="image not available" height="100" width="80"/></th><th colspan ="3"><img src="Logogpk.png" style="width:100%;"></img></th>
    </tr>
    <tr>
      <th>Semester :</th><th>'.$rowsd['sem'].'</th>
      <th>Year :'.$rowsd['year'].'</th><th>shift :'.$rowsd['shift'].'</th>
    </tr>
    <tr>
      <th>Branch :</th><th>'.$rowsd['branch'].'</th>
      <th>Gender :</th><th>'.$rowsd['gender'].'</th>
    </tr>
    <tr>
      <th>Name of Student :</th><th>'.$rowsd['name'].'</th>
      <th>Enrollment Number :</th><th>'.$rowsd['enrollmentno'].'</th>
    </tr>
    <tr>
    <th>JEEP Roll No :</th><th>'.$rowmd['jeeprno'].'</th>
    <th>Rank :</th><th>'.$rowmd['rank'].'</th>
    </tr>
    <tr>
      <th>UBTER Roll No :</th><th>'.$rowmd['ubterrno'].'</th>
      <th>Area :'.$rowmd['area'].'</th><th>Religion :'.$rowmd['religion'].'</th>
    </tr>
    <tr>
      <th>Minority :</th><th>'.$rowmd['minority'].'</th>
      <th>Category :</th><th>'.$rowmd['category'].'</th>
    </tr>
    <tr>
      <th>Sub-Category :</th><th>'.$rowmd['subcategory'].'</th>
      <th>Blood Group :</th><th>'.$rowsd['bloodgrp'].'</th>
    </tr>
    <tr>
      <th>Date of Birth :</th><th>'.$rowsd['dob'].'</th>
      <th>Mobile Number (Student) :</th><th>'.$rowsd['mobile'].'</th>
    </tr>
    <tr>
      <th>Email Address (Student) :</th><th><div style="width:100%;word-wrap:break-word;">'.$rowsd['email'].'<div></th>
      <th>Father\'s/Guardian\'s Name :</th><th>'.$rowpd['fathername'].'</th>
    </tr>
    <tr>
      <th>Mother\'s Name :</th><th>'.$rowpd['mothername'].'</th>
      <th>Father\'s/Guardian\'s Occupation :</th><th>'.$rowpd['occupation'].'</th>
    </tr>
    <tr>
      <th>Father\'s/Guardian\'s Mobile Number :</th><th>'.$rowpd['fmobile'].'</th>
      <th>Annual Income of <br>Father/Guardian :</th><th>'.$rowpd['fincome'].'</th>
    </tr>
    <tr>
      <th>Father\'s Max Qualification :</th><th>'.$rowpd['fqual'].'</th>
      <th>City :</th><th>'.$rowmd['city'].'</th>
    </tr>
    <tr>
      <th>Address of Correspondence :</th><th>'.$rowmd['coraddress'].'</th>
      <th>Permanent Address :</th><th>'.$rowmd['peraddress'].'</th>
    </tr>
  </table>

  <table style="width:100%;margin-bottom:10px;text-align:left;border-collapse:collapse;" class="table">
    <tr>
      <th style="text-align:center;" colspan="7">Educational Qualification</th>
    </tr>
    <tr>
    <th>Class</th><th>Board/University</th><th>Year</th><th>Total Marks</th><th>Marks Obtained</th><th>Percent</th>
    </tr>
    <tr>
    <th>High School</th><th>'.$rowhs['boardoruniversity'].'</th><th>'.$rowhs['year'].'</th><th>'.$rowhs['totalmarks'].'</th><th>'.$rowhs['marksobt'].'</th><th>'.$rowhs['percent'].'</th>
    </tr>
    <tr>
    <th>Intermediate</th><th>'.$rowim['boardoruniversity'].'</th><th>'.$rowim['year'].'</th><th>'.$rowim['totalmarks'].'</th><th>'.$rowim['marksobt'].'</th><th>'.$rowim['percent'].'</th>
    </tr>
    <tr>
    <th>Graduation</th><th>'.$rowgd['boardoruniversity'].'</th><th>'.$rowgd['year'].'</th><th>'.$rowgd['totalmarks'].'</th><th>'.$rowgd['marksobt'].'</th><th>'.$rowgd['percent'].'</th>
    </tr>
    <tr>
    <th>Post Graduation</th><th>'.$rowpg['boardoruniversity'].'</th><th>'.$rowpg['year'].'</th><th>'.$rowpg['totalmarks'].'</th><th>'.$rowpg['marksobt'].'</th><th>'.$rowpg['percent'].'</th>
    </tr>
  </table>

  <table class="table" style="width:100%;text-align:left;border-collapse:collapse;">
		<tr><th style="text-align:center;" colspan="8">Diploma</th></tr>
  <tr>
      <th>Semester</th><th>Board/University</th><th>Year</th><th>Summer/Winter</th><th>Total Marks</th><th>Marks Obtained</th><th>Percent</th><th>Backs</th>
  </tr>
  <tr>
    <th>Sem1</th><th>'.$rows1['boardoruniversity'].'</th><th>'.$rows1['year'].'</th><th>'.$rows1['summerorwinter'].'</th><th>'.$rows1['totalmarks'].'</th><th>'.$rows1['marksobt'].'</th><th>'.$rows1['percent'].'</th><th><div style="width:60px;word-wrap:break-word;">'.$rows1['backs'].'</div></th>
  </tr>
  <tr>
    <th>Sem2</th><th>'.$rows2['boardoruniversity'].'</th><th>'.$rows2['year'].'</th><th>'.$rows2['summerorwinter'].'</th><th>'.$rows2['totalmarks'].'</th><th>'.$rows2['marksobt'].'</th><th>'.$rows2['percent'].'</th><th><div style="width:60px;word-wrap:break-word;">'.$rows2['backs'].'</div></th>
  </tr>
  <tr>
    <th>Sem3</th><th>'.$rows3['boardoruniversity'].'</th><th>'.$rows3['year'].'</th><th>'.$rows3['summerorwinter'].'</th><th>'.$rows3['totalmarks'].'</th><th>'.$rows3['marksobt'].'</th><th>'.$rows3['percent'].'</th><th><div style="width:60px;word-wrap:break-word;">'.$rows3['backs'].'</div></th>
  </tr>
  <tr>
    <th>Sem4</th><th>'.$rows4['boardoruniversity'].'</th><th>'.$rows4['year'].'</th><th>'.$rows4['summerorwinter'].'</th><th>'.$rows4['totalmarks'].'</th><th>'.$rows4['marksobt'].'</th><th>'.$rows4['percent'].'</th><th><div style="width:60px;word-wrap:break-word;">'.$rows4['backs'].'</div></th>
  </tr>
  <tr>
    <th>Sem5</th><th>'.$rows5['boardoruniversity'].'</th><th>'.$rows5['year'].'</th><th>'.$rows5['summerorwinter'].'</th><th>'.$rows5['totalmarks'].'</th><th>'.$rows5['marksobt'].'</th><th>'.$rows5['percent'].'</th><th><div style="width:60px;word-wrap:break-word;">'.$rows5['backs'].'</div></th>
  </tr>
  <tr>
  <th>Sem 6</th><th colspan="6"></th><th><div style="width:60px;word-wrap:break-word;">'.$rows6['backs'].'</div></th>
  </tr>
  </table></div>';
  }
}
  ?>
  <button style="margin-top:10px;" onclick="window.print()">Print</button>
</body>
</html>