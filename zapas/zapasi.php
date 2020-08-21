<?php
// server je tam kam se pripojuji localhost:3306 je defaultni db_controller je jmeno uzivatele a root je heslo 
// TEST1 je jmeno Database ke ktere se pripojuji
$server = new mysqli('localhost:3306', 'db_controller', 'root', 'TEST1');
$sql = "INSERT INTO `Zapasi`(jmeno) VALUES('".$_POST["name"]."')";

// provede zapis do TEST1.zapasi
if($server -> query($sql) === TRUE){
    echo 'Zapas vytvoren';
}else{
    echo "Err ".$sql."<br/>".$server->error;
}

$sql1 = "SELECT * FROM `Zapasi`";
$res = $server->query($sql1);

if ($res->num_rows > 0) {
    echo "<ul>";
    while($r = $res->fetch_assoc()) {
        echo " <li><button>Zapas: ".$r["jmeno"]."<br></button></li>";
    }
    echo "</ul>";
} else {
  echo "Nejsou zadne zapasi";
}
// do promene zapas se ulozili data, ktere vypise program po odeslani query codu
$sql = "SELECT * FROM `Zapasi`";
$server -> close;