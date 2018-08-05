$(document).ready(function(){
    $("button").click(function(){
        var ans=new Object;
        for(var i=1;i<=3;i++){
            ans[i]=new Object();
            for(var j=1;j<=4;j++){
                var flag=0;
                if(document.getElementById(""+i+j).checked){
                    flag=1;
                    ans[i]["answer"]=document.getElementById(""+i+j).value;
                    break;
                }
            }
            if(flag==0){
                    ans[i]["answer"]=null;
            }
        }
        console.log(ans);
        $.ajax({
            url: "evaluateanswer.php",
            data:ans,
            type:"post", 
            success: function(result){
                //console.log(result);
                alert("Thank You for taking the Test\n Your Score is: "+result);
            }
        });
});
});