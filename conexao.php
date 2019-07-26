<?php

	function getCon(){

		$con = mysqli_connect("localhost", "root","","crudbd");

			if (mysqli_connect_errno()) {

				echo "falha" . mysqli_connect_erro();
				
			}

			return $con;

	}




?>