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
    <button><h1>Statistiky</h1></button>
    <section class="statistiky">
        <?php include 'statistika.php'?>
    </section>
</body>
</html>