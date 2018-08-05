function addquestion(){
            event.preventDefault();
            var question=document.getElementById("question").value;
            var option1=document.getElementById("option1").value;
            var option2=document.getElementById("option2").value;
            var option3=document.getElementById("option3").value;
            var option4=document.getElementById("option4").value;
            var answer=document.getElementById("answer").value;
            var question={
                "question":question,
                "option1":option1,
                "option2":option2,
                "option3":option3,
                "option4":option4,
                "answer":answer,                
                                
            }
            $.ajax({
                    url: "addquestion.php",
                    data:question,
                    type:"post", 
                    success: function(result){
                        if(result){
                            alert("Question Added");
                            document.getElementById("question").value="";
                            document.getElementById("option1").value="";
                            document.getElementById("option2").value="";
                            document.getElementById("option3").value="";
                            document.getElementById("option4").value="";
                            document.getElementById("answer").value="";
                        }
                        else{
                            alert("Failed");
                        }
                    }
            });
}