<?php
require_once("db.php");

if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $tgl_lahir = $_POST["tgl_lahir"];

    $query = "INSERT INTO siswa VALUES('$nama','$nim','$tgl_lahir')";

    if (mysqlI_query($connection, $query)) {
        echo "<p style='font-size: 20px;text-align: center'>New record created successfully</p>";
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
    echo "<p style='font-size: 20px;text-align: center'>Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan</p>";
}else {
    header("Location: form.php");
}
