<?php

require_once("connec.php");



$nim = $_GET["nim"];



$sql = "SELECT * FROM pendaftaran WHERE nim='$nim' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

    

    <title></title>

</head>

<body>

    <form action="update.php" method="post">

        <table align="center">

            <tr>

                <td>Id</td>

                <td>:</td>

                <td><input type="text" name="id" value="<?php echo $row["id"]; ?>"></td>

            </tr>

            <tr>

                <td>Nama</td>

                <td>:</td>

                <td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>">

                

                </td>

            </tr>

            <tr>

                <td>Tanggal Lahir</td>

                <td>:</td>

                <td><input type="date" name="tgl_lahir" value="<?php echo $row["tgl_lahir"]; ?>"></td>

            </tr>

            <tr>

                <td colspan="2"><input type="submit" value="Update"></td>

            </tr>

        </table>

    </form>

</body>

</html>