<?php

	include("conexao.php");

	function getUsers(){

		$users = getCon()->query( "SELECT * FROM users");
			if ($users) {
				
				return mysqli_fetch_all($users, MYSQLI_ASSOC);

			}else{

				return null;
			}

	}


	function create($nome){

			$sql = "INSERT INTO users (nome) VALUES " . "('" .  $nome . "')";

			$inserir = getCon()->query($sql);

			if ($inserir) {

				getCon()->close(); //fecha execução query

				echo "inserido";

			}else{

				echo 'Erro:', $inserir->error; // Exibe o erro

			}



	}

	function update($id, $nome){

		$sql = "UPDATE users SET nome = " . "'" . $nome . "'" . " WHERE id = " . $id;

		$update= getCon()->query($sql);

			if ($update) {
				getCon()->close(); //fecha a execução do query
				echo "alternado";
			}else{
				echo 'Erro:' , $update ->error; //exibe o erro

			}


	}

	function delete($id){

		$delete = getCon()->query("DELETE FROM users WHERE id = " . $id);
			if ($delete) {
					getCon()->close(); //fecha a execução do query
					echo "alternado";
			}else{
				echo 'Erro:' , $delete->error; //exibe o erro

			}

	}





?>