<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    echo json_encode(["message" => "Email $email telah disimpan di database."]);
}
?>
