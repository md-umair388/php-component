


<html>
    <head>
        <script type="text/javascript" src="js/jquery.min.js"
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<SCRIPT type="text/javascript">
$(document).ready(function()
{
$("#username").change(function() 
{ 
var username = $("#username").val();
var msgbox = $("#status");

if(username.length > 4)
{
$("#status").html('<img src="images/ajax_loader_blue_512.gif" align="absmiddle" height=25px width=25px>&nbsp;Checking availability...');

$.ajax({  
    type: "POST",  
    url: "ajax.php",  
    data: "username="+ username,  
    success: function(msg){  
   $("#status").ajaxComplete(function(event, request){ 
    if(msg == 'OK')
    { 
    
        $("#username").removeClass("red");
        $("#username").addClass("green");
        msgbox.html('<img src="images/available.png" height=25px width=25px align="absmiddle">');
    }  
    else  
    {  
         $("#username").removeClass("green");
         $("#username").addClass("red");
        msgbox.html(msg);
    }  
   
   });
   } 
   
  }); 

}
else
{
$("#username").addClass("red");
$("#status").html('<font color="#cc0000">Please Enter atleast 5 letters</font>');
}
return false;
});

});
</SCRIPT>
   <style type="text/css">
body
{
font-family:Tahoma, Geneva, sans-serif;
}
#status
{
font-size:11px;
margin-left:10px;
}
.green
{
background-color:#CEFFCE;
}
.red
{
background-color:#FFD9D9;
}
input
{
font-size:16px;
width:200px;
height:25px;
border:solid 1px #333333;
padding:4px;
}
h2 { font:Tahoma, Geneva, sans-serif; font-size:18px; color:#396693;}
h2 > .names { font:Tahoma, Geneva, sans-serif; font-size:18px; color:#C69;}


</style>     
    </head>
    <body>
<input type="text" name="username" id="username" style="margin-top:35px;" />&nbsp; &nbsp;
<span id="status"></span>
</body>
</html>