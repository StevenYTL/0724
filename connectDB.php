<?php

$link = @mysqli_connect('localhost','root','','test');

if(!$link) die("connect wrong");
mysqli_set_charset($link,'utf8');

//mysqli_close($link);

?>