<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_4133202";


$link = mysqli_connect($host,$user,$pass,$db);
echo $link? "Conected !!":"Connection Error.";

$strSQL = "SET NAMES utf8";
mysqli_query($link,$strSQL) or die(mysqli_error($link));


?>