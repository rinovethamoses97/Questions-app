<?php
//session start
session_start();
?>
<?php
require('config.php');
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$answer=$_POST['answer'];
$sql="insert into questions(question,option1,option2,option3,option4,answer) values('$question','$option1','$option2','$option3','$option4','$answer')";
$result=mysqli_query($conn,$sql);
if($result){
    echo true;
}
else{
    echo false;
}

?>
