<?php 
	include "functions.php";
	$users = getUsers();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" 
		content="width-device-width", user-scalable 
	>

	<title>index</title>
</head>
<body>

	<form action="inserir.php" method="get">
		<label for ="nome">Insira um usuário:</label>
		<input type="text" name="nome">

		<button type="submit">INSERIR</button>
	
	</form>

	<table>
		<?php foreach ($users as $key => $value) { ?>
		
			<tr>
				<td><?php echo $value["id"]; ?></td>
				<td><?php echo $value["nome"]; ?></td>
				<td><a href="<?php echo '/teste/delete.php?id=' . $value['id'] ?>">Excluir</a></td>			
				<td><a href="<?php echo '/teste/update.php?id=' . $value['id'] . '&nome=' .  $value['nome'] ?>">Editar</a></td>	
			</tr>
		<?php } ?>


		
	</table>

</body>
</html>