<?php
session_start();
?>
<?php
require('config.php');
$score=0;
$sql="select *from questions";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $answer=$row["answer"];
    if($answer==$_POST[$row['id']]["answer"]){
        $score++;
    }
}
$username=$_SESSION['username'];
$sql="insert into results(username,score) values('$username','$score')";
$result=mysqli_query($conn,$sql);

$sql="select max(id) as 'testid' from results where username='$username'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
for($j=1;$j<=3;$j++){
    $a=$_POST[$j]['answer'];
    $b=$row['testid'];
    $sql1="insert into answers values('$b','$j','$a','$username')";
    $result1=mysqli_query($conn,$sql1);
}
echo $score;
?>
