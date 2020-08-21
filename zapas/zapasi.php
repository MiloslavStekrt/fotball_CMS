<?php
$server = new mysqli('localhost:3306', 'db_controller', 'root', 'TEST1');
$sql = "INSERT INTO `Zapasi`(jmeno) VALUES('".$_POST["name"]."')";

if($server -> query($sql) === TRUE){
    echo 'Zapas vytvoren';
}else{
    echo "Err ".$sql."<br/>".$server->error;
}
$sqlv1 = "SELECT * FROM `Zapasi` WHERE 1";

$zapas = $server -> query($sqlv1);
if($zapas->num_rows > 0){
    echo "<ul>";
    while($row = $zapas->fetch_assoc){
        echo "<li>".$row['id']." ".$row['jmeno']."</li>";
    }
    echo '</ul>';
}else{
    echo 'Tak a zase to nefunguje nu coz. ';
}

$ids = $server -> query($sqlv1);

$last_id = max($ids);
echo $last_id;
if($server -> query($sqlv1) == FALSE){
    echo "Error ty idiote koukni sem mozna ho taky uvidis: <br/>";
    echo $sqlv1.$server->error;
}
$server -> close;