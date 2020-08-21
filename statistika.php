<?php
$server = new mysqli('localhost:3306', 'db_controller', 'root', 'TEST1');

$res = $server -> query("SELECT * FROM `Hraci`");
if($res->num_rows > 0){
    echo "<table id='table' style='text-align: center; border: 1px solid black'>";
    echo "<tr><th onclick='sortTable(0)'>Cislo Dressu</th><th onclick='sortTable(1)'>Jmeno hrace</th><th  onclick='sortTable(2)'>celkem golu</th><th onclick='sortTable(3)'>Assistenci</th><th onclick='sortTable(4)'>Trestu</th><th onclick='sortTable(5)'>Bodu</th></tr>";
    while($r = $res->fetch_assoc()){
        echo "<tr><td>".$r["dress"]."</td><td>".$r["Jmeno"]."</td><td>".$r["golu"]."</td><td>".$r["assistenci"]."</td><td>".$r["bodu"]."</td><td>".$r["tresty"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "Data neexistuji.";
}