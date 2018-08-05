<?php
session_start();
// to check if session exist
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
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Question</button>
                <button type="button" class="btn btn-info btn-lg" id="viewresult">View Results</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Questions</h4>
                        </div>
                        <div class="modal-body">
                            <!-- contents of modal -->
                            <form class="form-horizontal" onsubmit="addquestion()" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="question">Question:</label>
                                    <div class="col-sm-10">
                                        <input type="username" class="form-control" id="question" placeholder="Enter username" name="question">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="option1">Option1:</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="option1" placeholder="Enter option1" name="option1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="option2">Option2:</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="option2" placeholder="Enter option2" name="option2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="option3">Option3:</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="option3" placeholder="Enter option3" name="option3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="option4">Option4:</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="option4" placeholder="Enter option4" name="option4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="answer">Answer</label>
                                    <div class="col-sm-10">          
                                        <input type="text" class="form-control" id="answer" placeholder="Enter Answer" name="answer">
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                                
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>         
            </div>
    </body>
    <script>
      $("#viewresult").click(function(){
          window.open("viewresults.php");
      });
    </script>
</html>