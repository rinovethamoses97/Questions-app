<?php
session_start();
if(!isset($_SESSION["username"])){
    header('Location:index.html');
}
?>
    <html>
    <head>
            <title>Question App</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="admininterface.js"></script>
    </head>
    <body>
            <div class="container">
                <button type="button" class="btn btn-info btn-lg">Start Test</button><br><br>
                <div class="panel panel-info">
                    <div class="panel-heading">Instruction</div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">1.ifybi i43bi4 i4tub</li>
                            <li class="list-group-item">2.iqubf 4fubqufo3u4bf </li> 
                            <li class="list-group-item">3.ierub if4ub i2fb</li> 
                        </ul>
                    </div>
                </div>         
            </div>
    </body>
    <script>
        $(document).ready(function(){
             $("button").click(function(){
                window.location="testinterface.php";
            });
        });
    </script>
</html>