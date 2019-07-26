<?php

	include "functions.php";

		$id = $_GET['id'];
		$nome = $_GET['nome'];
		update($id, $nome);
		header("location:/teste/");


?>
