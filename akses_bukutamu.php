<!DOCTYPE html>
<html>
<body>
	<h2>Data Buku Tamu</h2>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "buku_tamu";

	/* Create Connection*/
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	/* Check Connection*/
	if (!$conn){
		die("Connection failed : " . mysqli_connect_error());
	}

	$sql = "SELECT ID_BT, NAMA, EMAIL, ISI FROM buku_tamu";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		/*Output data of each row*/
		while($row = mysqli_fetch_assoc($result)){
			echo "ID : " . $row["ID_BT"] ." - Nama : " . $row["NAMA"] . " " . $row["EMAIL"] ." ". $row["ISI"] . "<br>";
		}

	} else {
		echo "0 results";
	}

	mysqli_close($conn);

?>

</body>
</html>
