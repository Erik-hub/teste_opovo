<?php

	include "functions.php";

		$id = $_GET['id'];
		delete($id);
		header("location:/teste/");


?>
