<style>
.bgmenu{
    background: #5C5C5C;
    text-align: center;
    height: 50px;
    font-size: 25px;
    padding: 20px;
    color: white;
}
.bgmenu a{
    color: white;
    text-decoration: none;
}

</style>
<?php
if(isset($_SESSION['status'])){    
if($_SESSION['status']=='admin'){
?>
<table width="100%" >
<tr><td class="bgmenu"><a href="home.php" >ผู้ใช้งาน</a></td></tr>

<tr><td class="bgmenu"><a href="dorm.php?nam=หอพักชาย" >หอพัก</a></td></tr>

<tr><td class="bgmenu"><a href="option.php" >บริการเสริม</a></td></tr>
</table>
<?php
}}
?>

<?php
if(isset($_SESSION['status'])){
if($_SESSION['status']=='supervisor'){
?>
<br><br>
<table width="100%" >

<tr><td class="bgmenu"><a href="rent.php?nam=หอพักชาย" >หอพัก</a></td></tr>

</table>
<?php
}}
?>


<?php
if(isset($_SESSION['status'])){
if($_SESSION['status']=='user'){
?>
<br><br>
<table width="100%" >
<tr><td class="bgmenu"><a href="checkin.php?nam=หอพักชาย" >จองหอพัก</a></td></tr>
<tr><td class="bgmenu"><a href="changein.php" >ย้ายห้องพัก</a></td></tr>
<tr><td class="bgmenu"><a href="checkout.php" >ยกเลิกห้องพัก</a></td></tr>
<tr><td class="bgmenu"><a href="payment.php" >ใบชำระเงิน</a></td></tr>
</table>
<?php
}}
?>
