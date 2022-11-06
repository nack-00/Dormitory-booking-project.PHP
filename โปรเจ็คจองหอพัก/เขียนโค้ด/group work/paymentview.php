<style>
.tr {
  text-align: right;
}
.tl {
  text-align: left;
}
.floa {
float:left;
}
.tc {
  text-align: center;
}
.tsiz {
  font-size: 20px;
}
.tsiz2 {
  font-size: 12px;
}
.ta1 {
  background: #D9D9D9;
  padding: 25px;
}
.td1 {
  border-bottom: 2px solid black;
}
.ahre{ 
    /* ลิ้ง */
  color: black;  /* สีอักษร */
}
.ahre1{ 
    /* ลิ้ง */
  color: blue;  /* สีอักษร */
}
.selec{
  font-size: 25px;
  width: 400px;  
  background: #D9D9D9;
  text-align: center;  
}
.btn1{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50px;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: white;  /* สีพื้นหลัง */
color: black;        /* สีอักษร */
}
.txt4{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 25px;         /* ความสูง */
font-size: 25px;     /* ขนาดอักษร */
background-color: #D9D9D9;  /* สีพื้นหลัง */
color: black;        /* สีอักษร */
}
.padd{
padding-top: 10px;

}
.padd1{
padding: 30px;

}

</style>
<?php
include "config/db.php";
$username =$_SESSION['username'];
$sql = "SELECT * from dorm WHERE  user1='$username' or user2='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

  $id = $row['id'];
  $name = $row['name'];
  $type = $row['type'];
  $room = $row['room'];

$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$sex = $_SESSION['sex'];
?>
<br><br><br>
<table width="75%" class="tl tsiz padd1" bgcolor="lightgray" >
<tr><td><br>&nbsp;รายละเอียดการจองหอพัก  <?=$room?></td><td></td></tr>
<tr><td><br>&nbsp;ชื่อผู้จอง :   <?=$firstname." ".$lastname?></td><td>&nbsp;หอพัก : หอพัก<?=$sex?></td></tr>
<tr><td><br>&nbsp;หมายเลขห้อง :   <?=$room?></td><td>&nbsp;</td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td><br>&nbsp;ค่าบำรุงหอพัก :  <br>&nbsp;&nbsp;7000 </td><td>&nbsp;</td></tr>

<tr><td><br>&nbsp;ค่าบริการเสริม :   <br>&nbsp;&nbsp;500</td><td>&nbsp;</td></tr>

<tr><td><br>&nbsp;รวมเงิน :   <br>&nbsp;&nbsp;7500</td><td>&nbsp;</td></tr>
<tr><td><br>&nbsp;ส่วนเสริม :   <br>&nbsp;&nbsp;</td><td>&nbsp;</td></tr>
<?php
  $sql = "SELECT * FROM checkin where user='$username'";
  $result = $conn->query($sql);
  $i=1;
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $nameopt = $row['name'];
    //echo "<tr><td>&nbsp;&nbsp; <input type='checkbox' >$nameopt</td><td></td></tr>";
    echo "<tr><td>&nbsp;&nbsp; $nameopt</td><td></td></tr>";
    $i=$i+1;
  }?>
</table>


<br><br>
<form action="checkoutcheck.php" method="post">  
