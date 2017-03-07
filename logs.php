<?php 
$con = mysqli_connect('localhost', 'root', '1', 'chatbox');

$result1 = mysqli_query($con, "SELECT * FROM logs ORDER by id ");

while($extract = mysqli_fetch_array($result1)){
 echo "<span id='uname'>". $extract['username']. ":    </span:<span id='msg'>" . $extract['msg']. "</span><br>";
 
}

?>﻿