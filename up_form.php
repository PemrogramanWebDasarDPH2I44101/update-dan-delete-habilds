<?php
require_once("db.php");

if(isset($_GET["nim"])) {
    $nim = $_GET["nim"];

    $query = "SELECT * FROM siswa WHERE nim=$nim";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit <?php echo $row["nama"]; ?></title>
    <style type="text/css">
        input[type=text],input[type=date] {
            width: 180px;
            height: 20px;
        }
    </style>
</head>
<body>
    <form action="update.php" method="post">
    <h2 align="center">Edit Form <?php echo $row["nama"]; ?></h2>
        <table align="center">
            <tr>
                <td colspan="2">Nama</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
            </tr>
            <tr>
                <td colspan="2">Nim</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" value="<?php echo $row["nim"]; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td colspan="2">Tanggal Lahir</td>
            </tr>
            <tr>
                <td colspan="2"><input type="date" name="tgl_lahir" value="<?php echo $row["tgl_lahir"]; ?>"></td>
            </tr>
            <tr>
                <td><a href="list.php">Kembali</a></td>
                <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
                <td align="right"><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
}else {
    header("Location: list.php");
} ?>