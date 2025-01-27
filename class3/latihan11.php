<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna Method Get</title>
</head>
<body>
    <form action = "#" method = "get">
    Nama: <input type="text" name = "nama"><br>

    <input type = "submit">
    </form>

    <?php
    if (isset($_GET["nama"]))
    {
        echo "Nama : ".$_GET["nama"];
    }
    ?>
</body>
</html>