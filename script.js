
        function login(){
            event.preventDefault();
            var username=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            var login={
                "username":username,
                "password":password
            }
            $.ajax({
                    url: "login.php",
                    data:login,
                    type:"post", 
                    success: function(result){
                        var obj=JSON.parse(result);
                        if(obj[0]){
                            if(obj[1]=="admin"){
                                window.location="admininterface.php"
                            }
                            else{
                                window.location="studentinterface.php"
                            }
                        }
                        else{
                            alert("Login Failed");
                            document.getElementById("username").value="";
                            document.getElementById("password").value="";
                        }
                    }
            });

        }