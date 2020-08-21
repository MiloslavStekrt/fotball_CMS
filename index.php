<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Player to DB</title>
</head>
<body>
    <section class="add_player">
        <form action="player/" method="POST">
            <input type="text" name="jmeno" id="jmeno" placeholder="Zadejte jmeno/Prezdivku">
            <input type="number" name="dress" id="dress" placeholder="Cislo Dressu">
            <input type="submit" value="Pridat Hrace">
        </form>
    </section>
    <section class="start_turnament">
        <form action="zapas/" method="POST">
            <input type="text" placeholder="Jmeno zapasu" id="name" name="name">
            <input type="submit" value="Zacit Zapas">
        </form>
    </section>
    <section class="statistiky">
        <?php include 'statistika.php' ?>

<script>
    function sortTable(n) {
      var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
      table = document.getElementById("table");
      switching = true;
      dir = "asc";
      while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          switchcount ++;
        } else {
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
    }
    </script>
    </section>
</body>
</html>