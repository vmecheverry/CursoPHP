<?php
try{
$pdo= new PDO("mysql:host=localhost;dbname=cursophp","root","123456" );
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo $e->getMessage();
}
?>
