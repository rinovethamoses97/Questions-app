<?php
session_start();
?>
<?php
require('config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select *from login where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)==1)
{
    $arr[0]=true;
    $arr[1]=$row["role"];    
    $_SESSION["username"]=$username;
}
else
{
    $arr[0]=false;
    
}
echo json_encode($arr);
?>
