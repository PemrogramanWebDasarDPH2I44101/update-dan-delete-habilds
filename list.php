<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
</head>
<body>
    <h2 align="center">Semua Data</h2>
    <table align="center" cellpadding="5" width="400px" border=1 style="border-collapse: collapse">
        <tr align="left">
            <th>Nama</th>
            <th>Nim</th>
            <th>Tgl Lahir</th>
            <th><a href="form.php">Input Data</a></th>
        </tr>

        <?php
            $query = "SELECT * FROM siswa";

            $result = mysqli_query($connection, $query);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    ?>
                    <tr>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["nim"]; ?></td>
                        <td><?php echo $row["tgl_lahir"]; ?></td>
                        <td><?php echo "<a href='up_form.php?nim=$id'>Edit</a> | <a href='delete.php?nim=$id'>Hapus</a>"; ?></td>
                    </tr>
                    <?php
                }
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>
