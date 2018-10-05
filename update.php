<?php
require_once("db.php");

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $tgl_lahir = $_POST["tgl_lahir"];

    $query = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl_lahir' WHERE nim=$nim";
    if (mysqli_query($connection, $query)) {
        mysqli_close($connection);
        echo "<p style='font-size: 20px;text-align: center'>Record updated successfully</p>";
        echo "<p style='font-size: 20px;text-align: center'>Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan</p>";
    }else {
        echo "Error updating record: " . $query . "<br>" . mysqli_error($connection);
    }
}else {
    header("Location: list.php");
}