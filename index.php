<!-- <?php
phpinfo();
?> -->

<html>
<head>
<title>Chat PHP Trainee</title>
<link rel = "stylesheet" type="text/css" href ="chat.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function submitChat(){
 if(form.uname.value == '' || form.msg.value == '' ){
  alert('Ведите Ваше имя и сообщение');
  return;
 }
 form.uname.readOnly = true;
 form.uname.style.border = 'none';
 var uname = form.uname.value;
 var msg = form.msg.value;
 var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
 
           }
 
 }
 xmlhttp.open('GET','insert.php?uname='+uname+ '&msg='+msg, true);
 xmlhttp.send();
 
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');
}, 1000);
});
</script>

</head>
<body>
<div id="block">
	<form name = "form">
	Enter Your Nickname:<br> <input type="text" name="uname" placeholder="Ваше имя" /><br>
	Your Message: <br>
	<textarea name= "msg" placeholder="Напишите что-то в чат" ></textarea><br>
	<a href= "#" onclick="submitChat()" id="click">Send</a><br>


	<div id="chatlogs"> 
	LOADING CHATLOGS PLEASE WAIT...
	</div>
</div>
</body>﻿
