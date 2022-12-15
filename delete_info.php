<?php
require('databaseconnect.php');
if (isset($_POST["delete_table"])) {
		$delete = mysqli_query($db,"DELETE FROM `aktiv(main)` WHERE id = '".$_POST["id2"]."'");
	}
    header('Location: '.'index.php');
?>