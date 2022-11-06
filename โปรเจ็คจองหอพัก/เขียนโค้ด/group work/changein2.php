<?php
include "header.php" ;

$roomid = $_POST['id'];

//echo $roomid." ".$_SESSION['username'];


?>
<form action="changeincheck.php" method="post">


<table>
    <input type="hidden" value="<?=$roomid?>" name="roomid">
    <?php
    $sql = "SELECT * FROM option";
    $result = $conn->query($sql);
      $i=1;
      while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        echo "<tr><td><input type='checkbox' name='option[]' value='$name'>$name</td></tr>";
        $i=$i+1;
      }  
    
    ?>
</table>

<table width="90%" class="tc" >
<tr><td><input type="submit" value="ยืนยันการย้าย" class="btn1" name="add"></td></tr>
</table>
</form>

<?php include "footer.php" ; ?>