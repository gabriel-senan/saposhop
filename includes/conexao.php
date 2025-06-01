<?php
$conn = mysqli_connect("localhost", "root", "", "sapo_shop");
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
