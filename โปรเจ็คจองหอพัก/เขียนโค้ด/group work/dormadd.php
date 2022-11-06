<?php include "header.php" ; ?>
 
<style>
.tr {
  text-align: right;
}
.tl {
  text-align: left;
}
.tc {
  text-align: center;
}
.tsiz {
  font-size: 25px;
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
.tb1{
  padding-top: 25px;
}
.txt1{
width: 400px;            /* ความกว้าง */
margin-top: 10px;       /* ห่างจากด้านบน */
height: 25px;           /* ความสูง */
font-size: 25px;        /* ขนาดอักษร */
text-align: center;     /* อีกษรกึ่งกลาง */
background: #D9D9D9; /* สีพื้นหลัง */
color: black;           /* สีอักษร */
}

.btn1{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50px;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: darkorange;  /* สีพื้นหลัง */
color: white;        /* สีอักษร */
}
</style>

<table width="90%" >
<tr><td class="tc tsiz tb1">เพิ่มหอพัก</td></tr>
</table>

<form action="dormcheck.php" method="post">
<table width="90%">
<tr><td class="tl tsiz tb1">หอพัก*</td></tr>
<tr><td >
<select class="selec" name="name">
<option value="หอพักชาย">หอพักชาย</option>
<option value="หอพักหญิง">หอพักหญิง</option>
</select>
</td></tr>

<tr><td class="tl tsiz tb1">ประเภท*</td></tr>
<tr><td class="">
<select class="selec" name="type">
<option value="ห้องธรรมดา">ห้องธรรมดา</option>
<option value="ห้องปรับอากาศ">ห้องปรับอากาศ</option>
</select>
</td></tr>

<tr><td class="tl tsiz tb1">ห้องพัก*</td></tr>
<tr><td class=""><input type="text" class="txt1" name="room"></td></tr>
</table>

<br><br><br><br><br><br><br><br><br>
<table width="90%" class="tc">
<tr><td class="tc cred tsiz">  
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td><input type="submit" value="บันทึก" class="btn1" name="add"></td></tr>
</table>
</form>


<?php include "footer.php" ; ?>