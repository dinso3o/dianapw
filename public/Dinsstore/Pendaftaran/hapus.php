<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query(
    $cek,
    "DELETE FROM pendaftaran
    WHERE id='$id'"
);

header("Location:data.php");

?>