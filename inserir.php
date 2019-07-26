<?php

	include "functions.php";

		$nome = $_GET['nome'];
		create($nome);
		header("location:/teste/");


?>
