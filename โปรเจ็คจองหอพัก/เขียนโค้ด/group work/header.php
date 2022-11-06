<?php
  
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration System PDO</title>
  
</head>
<body>
<style>
    /* การตั้งค่า */
.tc{
text-align: center;  /* อักษรกลาง */
}
.tr{
text-align: right;   /* อักษรขวา */
}
.fs{
font-size: 25px;  /* อักษรกลาง */
}
.cred{
    color: red;   /* อักษรสีแดงคำเตือน */
}
.ban{
    background: #959595;
    color: red;   /* อักษรสีแดงคำเตือน */
}
.ban1{
    background: #D9D9D9;
    color: red;   /* อักษรสีแดงคำเตือน */
}
.cgreen{
    color: green;   /* คำเตือนอักษรสีเขียว */
}
.cwhi{
    color: white;   /* คำเตือนอักษรสีเขียว */
}
.cwhite{
    color: white;   /* คำเตือนอักษรสีเขียว */
}
.pad{
padding:0;
}
</style>





<table border=0  width="90%" align="center" bgcolor="black" cellspacing="0" cellpadding="0">

<tr  height=50 class="cwhi"><td class="tc fs">ระบบจองหอพักนิสิต BUU</td><td></td><td></td>
<td class="tr"><?=$_SESSION['firstname']?>&nbsp; | <?=$_SESSION['status']?>&nbsp; | <a href="logout.php" class="cwhi"> ออกจากระบบ </a>&nbsp;
 </td></tr>
 
<tr  height=60 class="ban"><td width=300 class="tc fs cwhi">
เมนูการใช้งาน
</td><td width=10 bgcolor="DarkOrange"></td><td width=10 bgcolor="gold">    
</td><td class="ban1"></td></tr>

</table>

<table border =0 width="90%" align="center" cellspacing="0" cellpadding="0">
<tr  height=1000><td width = 300 valign="top"  align="center" bgcolor="#959595">
<?php
include "menu.php"
?>
</td><td valign="top"  align="center">