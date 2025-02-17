<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Halo, $name! Data berhasil dikirim dengan metode POST.";
}
?>
