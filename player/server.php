<?php 
$server = new mysqli('localhost:3306', 'db_controller', 'root', 'TEST1');
$sql = "INSERT INTO `Hraci`(`Jmeno`, `dress`, `bodu`, `golu`, `assistenci`, `tresty`) VALUES ('".$_POST["jmeno"]."','".$_POST["dress"]."',0,0,0,0)";

if($server->query($sql) === TRUE){
    echo "Record Added Sucess fully";
}else{
    echo "Error in " . $sql . "<br/>" . $server->error;
}
$server -> close;