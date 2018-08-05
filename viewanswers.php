<?php
session_start();
?>
<?php
require('config.php');
$testid=$_GET['testid'];
$sql="select *from answers where testid='$testid'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo $row['questionid'];
    echo $row['answer'];
    echo "<br>";
}
?>
