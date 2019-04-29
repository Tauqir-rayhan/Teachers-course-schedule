<?php
 $fonts = "verdana";
 $bgcolor = "rgb(255, 154, 90)"; 
 $fontcolor = "#fff";
?>

<!doctype html>
<html>
<head>
 <title>Course</title>
 <style>
  body{font-family:<?php echo $fonts;?>}
  .phpcoding{width:1200px; margin: 0 auto;
   background:<?php echo "#ddd" ?>;}
  .headeroption, .footeroption{background:<?php echo $bgcolor; ?>;
   color:<?php echo $fontcolor; ?>;text-align:center;padding:20px;}
  .headeroption h2, .footeroption h2{margin:0;font-size:24px}
  .maincontent{min-height:400px;padding:20px;font-size:18px}
  p{margin:0}
 input[type="text"]{width:238px;padding:5px;}
 select{font-size:18px;padding:2px 5px;width:250px;}
 .tblone{width:100%;border:1px solid #fff;margin:20px 0}
 .tblone td{padding:5px 10px;text-align:center;}
 table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
 table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}
 #myform{width:400px;border:1px solid #fff;padding:10px;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
 
  <h2><?php echo "Request of course"; ?></h2>
 </section>
  <section class="maincontent">
  <section class="subject">
<p> <span style="float:right"><a href="student.php">For Student</a> || <a href="index.php">For Teacher</a> || <a href="request.php">Request</a></span>|| <a href="room_status.php">Room</a></span>|| <a href="room_book.php">Room_Book</a></span>|| <a href="teaches.php">Teaches</a><p>
</section>



