<?php
$name= $_POST['name'];
$lastName =$_POST['lastName'];
$age= $_POST['age'];
$address= $_POST['address'];

$text = $name.$lastName.$age.$address;
file_put_contents('text.txt',$text."\n",FILE_APPEND);