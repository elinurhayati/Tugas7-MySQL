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

	$sql = "INSERT INTO buku_tamu (ID_BT, NAMA, EMAIL, ISI) 
	VALUES ('A001', 'Eli Nurhayati', 'eli2362@gmail.com', 'Mahasiswa UPN'), ('A002', 'Vika Pratiwi', 'vika@gmail.com', 'Mahasiswa Unair'),('A003', 'Shandy Putri', 'shandy@gmail.com', 'Mahasiswa UGM')"
	;

	if (mysqli_query($conn, $sql)){
		echo "New record created successfully";
	} else {
		echo "Error : " .$sql . "<br>" . mysqli_error($conn);
	} 
	mysqli_close($conn);

?>