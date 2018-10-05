<?php
require_once("db.php");

if(isset($_GET["nim"])) {
    $nim = $_GET["nim"];

    $query = "DELETE FROM siswa WHERE nim=$nim";

    if (mysqli_query($connection, $query)) {
        mysqli_close($connection);
        echo "<p style='font-size: 20px;text-align: center'>Record deleted succesfully</p>";
        echo "<p style='font-size: 20px;text-align: center'>Silahkan klik <a href='list.php'>link ini</a> untuk melanjutkan</p>";
    }else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}else {
    header("Location: list.php");
}