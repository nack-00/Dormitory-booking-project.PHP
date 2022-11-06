<style>
    /* การตั้งค่า */
.tc{
text-align: center;  /* อักษรกลาง */
}
.thed{
    /* หัวข้อส่วนใหญ่ */
text-align: left;   /* อักษรซ้าย */
padding-left: 50px; 
font-size: 25px;    /* ขนาดอักษร */
}
.tr{
text-align: right;   /* อักษรขวา */
}
.cred{
    color: red;   /* คำเตือนอักษรสีแดง */
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
background-color: darkgrey; /* สีพื้นหลัง */
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


<form action="signupcheck.php" method="post">
<table width="40%" align="center" border=0 class="tc">

<tr><td><img src="img/buulogo.png" width=150></td></tr>

<tr><td><h1>สมัครสมาชิก</h1></td></tr>

<tr><td class="thed">ชื่อจริง*</td></tr>
<tr><td><input type="text" name="firstname" value="" class="txt1"></td></tr>

<tr><td class="thed">นามสกุล*</td></tr>
<tr><td><input type="text" name="lastname" value="" class="txt1"></td></tr>

<tr><td class="thed">ชื่อผู้ใช้*</td></tr>
<tr><td><input type="text" name="username" value="" class="txt1"></td></tr>

<tr><td class="thed">รหัสผ่าน*</td></tr>
<tr><td><input type="text" name="password" value="" class="txt1"></td></tr>

<tr><td class="thed">เบอร์โทรศัพท์*</td></tr>
<tr><td><input type="text" name="phonenumber" value="" class="txt1"></td></tr>

<tr><td class="thed">เพศ*</td></tr>
<tr><td>
<div class="thed"><input type="radio" name="sex" value="ชาย"> ชาย <input type="radio" name="sex" value="หญิง"> หญิง </div>
</td></tr>

<tr><td class="tr pt1"><a href="index.php">ไปยังหน้าเข้าสู่ระบบ</a></td></tr>

<tr><td class="cred">
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td><input type="submit" name="signup" value="สมัครสมาชิก" class="btn1"></td></tr>


</table>
</form>