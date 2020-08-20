<?php
$server = new mysqli('localhost:3306', 'db_controller', 'root', 'TEST1');
$sql = "INSERT INTO `Zapasi`(jmeno) VALUES('".$_POST["name"]."')";

if($server -> query($sql) === TRUE){
    echo 'Zapas vytvoren';
}else{
    echo "Err ".$sql."<br/>".$server->error;
}