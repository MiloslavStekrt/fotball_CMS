<?php
$server = new mysqli('localhost:3306', 'db_controller', 'root', 'TEST1');

$res = $server -> query("SELECT * FROM `Hraci`");
if($res->num_rows > 0){
    echo "<table>";
    echo "<tr><td>Cislo Dressu</td><td>Jmeno hrace</td><td>celkem golu</td><td>Assistenci</td><td>Trestu</td></tr>";
    while($r = $res->fetch_assoc()){
        //Jmeno`, `dress`, `bodu`, `golu`, `assistenci`, `tresty`
        echo "<tr><td>".$r["dress"]."</td><td>".$r["Jmeno"]."</td><td>".$r["golu"]."</td><td>".$r["assistenci"]."</td><td>".$r["bodu"]."</td><td>".$r["tresty"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "Data neexistuji.";
}