<?php
require_once("connec.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border=1>
	<thead>
		
		<th>Nim</th>
		<th>Nama</th>
		<th>jeniskelamin</th>
		<th>hobi</th>
		<th>fakultas</th>
		<th>alamat</th>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM pendaftaran";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0 ) {
			
			while($row = mysqli_fetch_array($result)){
				$id = $row["nim"];
				echo "<tr>";
				echo "<td>" . $row["nim"] . "</td";
				echo "<td>" . $row["nama"] . "</td";
				echo "<td>" . $row["kelas"] . "</td";
				echo "<td>" . $row["jeniskelamin"] . "</td";
				echo "<td>" . $row["hobi"] . "</td";
				echo "<td>" . $row["fakultas"] . "</td";
				echo "<td>" . $row["alamat"] . "</td";
				echo "<td>" ."<a href ='update.php?nim=$id'>edit</a>|a href ='update.php'?nim$id'>"
				echo "</tr>";
			}
		}else {
			echo "<tr><td colspan='4' align='center'>0 result.</td></tr>";
		}
?>
	</tbody>
</table>
</body>
</html>