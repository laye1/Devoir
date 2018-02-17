<?php 



$server="localhost";
$login="root";
$passwd="";
$dbname="school";

$for=new PDO('mysql:host=' .$server.'; dbname='.$dbname.';charset=utf8',$login,$passwd);
?>
