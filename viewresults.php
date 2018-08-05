<?php
session_start();
if(!isset($_SESSION["username"])){
    header('Location:index.html');
}
require('config.php');
$sql="select *from results";
$result=mysqli_query($conn,$sql);
?>
    <html>
    <head>
            <title>Question App</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
            
    </head>
    <body>
            <div class="container">
                <div class="alert alert-info">
                    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                </div>
                <?php 
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                        <div class="list-group">
                            <a href="viewanswers.php?testid=<?php echo $row['id'];?>" class="list-group-item list-group-item-info"><?php echo $row['username']?></a>
                            <li class="list-group-item"><strong>Score: </strong><?php echo $row['score'];?></li> 
                        </div>
                    <?php
                }
                ?> 
            </div>
    </body>
</html>