<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <style type="text/css">
        input[type=text],input[type=date] {
            width: 180px;
            height: 20px;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="post">
        <h2 align="center">Registration Form</h2>
        <table align="center">
            <tr>
                <td colspan="2">Nama</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td colspan="2">Nim</td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td colspan="2">Tanggal Lahir</td>
            </tr>
            <tr>
                <td colspan="2"><input type="date" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td><a href="list.php">Lihat Data</a></td>
                <td align="right"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
