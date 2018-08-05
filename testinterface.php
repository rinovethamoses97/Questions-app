<?php
session_start();
if(!isset($_SESSION["username"])){
    header('Location:index.html');
}
require('config.php');
$sql="select *from questions";
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
            <script src="testinterface.js"></script>
            <style>
                input[type=radio],
                input.radio {
                    float: left;
                    clear: none;
                    margin: 2px 0 0 2px;
                }
            </style>
    </head>
    <body>
            <div class="container">
                <div class="alert alert-info">
                    Welcome <strong><?php echo $_SESSION['username']; ?></strong> All the Best.
                </div>
                <div class="questions">
                    <?php
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                                <div class="panel panel-info">
                                    <div class="panel-heading"><?php echo $row['id'];echo $row['question'];?></div>
                                    <div class="panel-body">
                                        <ul>
                                            <input type="radio" class="radio" value="<?php echo $row['option1'];?>" id="<?php echo $row['id'];?>1" name="<?php echo $row['id'];?>"/>
                                            <label  for="<?php echo $row['id'];?>1"><?php echo $row['option1'];?></label>
                                            <br><br>
                                            <input type="radio" class="radio" value="<?php echo $row['option2'];?>" id="<?php echo $row['id'];?>2" name="<?php echo $row['id'];?>"/>
                                            <label  for="<?php echo $row['id'];?>2"><?php echo $row['option2'];?></label>
                                            <br><br>
                                            <input type="radio" class="radio" value="<?php echo $row['option3'];?>" id="<?php echo $row['id'];?>3" name="<?php echo $row['id'];?>"/>
                                            <label  for="<?php echo $row['id'];?>3"><?php echo $row['option3'];?></label>
                                            <br><br>
                                            <input type="radio" class="radio" value="<?php echo $row['option4'];?>" id="<?php echo $row['id'];?>4" name="<?php echo $row['id'];?>"/>
                                            <label  for="<?php echo $row['id'];?>4"><?php echo $row['option4'];?></label>
                                        <ul>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                    <button type="button" class="btn btn-info btn-lg">Submit</button>
                </div>  
            </div>
    </body>
</html>