<html>
    <head>
    <title>Penggunaan Method Post</title>
    </head>
<body>

    <form action="#" method="post">
        Nama: <input type="text"name="nama"><br>
        <input type="submit">
    </form>

    <?php
        if (isset($_POST["nama"]))
        {
            echo "Nama : ".$_POST["nama"];
        }      
    ?>
</body>
</html>