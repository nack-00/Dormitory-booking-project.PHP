
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
   font-size: 20px;
 }
 .tsiz1 {
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
 
 </style>
 
 
 <br><br>
 <table width="90%">
 <tr><td class="tl tsiz1">จัดการข้อมูลผู้ใช้งาน &nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
 
 <tr><td class="tr tsiz"><a href="homeadd.php" class='ahre1'>เพิ่ม</a></td></tr>
 </table>
 
 
 
 
 <table width="90%" class="tc ta1 tsiz">
 <tr><td class="td1">ลำดับ</td><td class="td1">ชื่อจริง</td><td class="td1">นามสกุล</td> <td class="td1">ชื่อผู้ใช้</td>
 <td class="td1">รหัสผ่าน</td><td class="td1">เบอร์โทรศัพท์</td> <td class="td1">สถานะ</td><td class="td1">เพศ</td>
 <td class="td1" width=100>แก้ไข</td><td class="td1" width=100>ลบ</td></tr>
 <?php
 $sql = "SELECT * FROM users ";
 $result = $conn->query($sql);
   $i=1;
   while($row = $result->fetch_assoc()) {
     $id = $row['id'];
     $firstname = $row['firstname'];
     $lastname = $row['lastname'];
     $username = $row['username'];
     $password = $row['password'];
     $phonenumber = $row['phonenumber'];
     $sex = $row['sex'];
     $status = $row['status'];
     echo "<tr><td>$i</td><td>$firstname </td> <td> $lastname</td><td> $username</td><td> $password</td>
     <td>$phonenumber</td><td>$sex</td><td>$status</td>
     <td><a href='homeedit.php?id=$id' class='ahre'>แก้ไข</a></td>
     <td><a href='homecheck.php?del=$id' class='ahre'>ลบ</a></td>
     </tr>";
     $i=$i+1;
   }
 
 
 
 ?>
 
 
 </table>
 
 
 
 
 <?php include "footer.php" ; ?>