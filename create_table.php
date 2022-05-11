<?php
	$sql = "CREATE Liga TABLE(
		id INT(6) Unsigned AUTO_INCREMENT PRIMARY KEY, 
		kode VARCHAR(3) NOT NULL,
		negara VARCHAR(30) NOT NULL,
		champion INT(3)
	)";

	if (mysqli_query($conn, $sql)){
		echo "Tabel Liga berhasil dibuat";
	} else {
		echo mysqli_error($conn);
	}
?>