<style>
    /* การตั้งค่า */
.tc{
text-align: center;  /* อักษรกลาง */
}
.tr{
text-align: right;   /* อักษรขวา */
}
.cred{
    color: red;   /* อักษรสีแดงคำเตือน */
}
.cgreen{
    color: green;   /* คำเตือนอักษรสีเขียว */
}
.pt1{
    padding-top: 10px; /* ช่องว่าง */
}
/* ตั้งค่าtextbox */
.txt1{
width: 100%;            /* ความกว้าง */
margin-top: 10px;       /* ห่างจากด้านบน */
height: 50px;           /* ความสูง */
border-radius: 25px;    /* ความกลม */
font-size: 25px;        /* ขนาดอักษร */
text-align: center;     /* อีกษรกึ่งกลาง */
background: darkgrey; /* สีพื้นหลัง */
color: white;           /* สีอักษร */
}


.btn1{
/* ตั้งค่าปุ่ม */
width: 100%;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: darkorange;  /* สีพื้นหลัง */
color: white;        /* สีอักษร */
}


a{ 
    /* ลิ้ง */
  color: black;  /* สีอักษร */
}

</style>
<?php require_once 'config/db.php'; ?>

<br><br><br><br>
<form action="login.php" method="post">
<table width="50%" align="center" border=0 class="tc">

<tr><td><img src="img/buulogo.png" width=150></td></tr>

<tr><td><h1>ระบบจองหอพักนิสิต BUU</h1></td></tr>

<tr><td><input type="text" name="username" value="" class="txt1"></td></tr>

<tr><td><input type="password" name="password" value="" class="txt1"></td></tr>

<tr><td class="tr pt1"><a href="signup.php">สมัครสมาชิก</a></td></tr>

<tr><td class="cred">
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td class="cgreen">
<?php 
if(isset($_SESSION['save'])){
echo $_SESSION['save'];
unset($_SESSION['save']);
}
?>
</td></tr>

<tr><td><input type="submit" name="" value="เข้าสู่ระบบ" class="btn1"></td></tr>


</table>
</form>