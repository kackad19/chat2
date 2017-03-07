<?php 

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost', 'root', '1', 'chatbox');


mysqli_query($con, "INSERT INTO logs(`username`, `msg`) VALUES('$uname', '$msg')");

$result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id ");

while($extract = mysqli_fetch_array($result1)){
 echo "<span id='uname'>". $extract['username']. "</span:<span id='msg'>" . $extract['msg']. "</span><br>";
 
}

?>﻿