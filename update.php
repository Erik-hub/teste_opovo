<form action="updateConfirm.php" method="get">
		<label for ="nome">Alterar usuário:</label>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
		<input type="text" name="nome" value="<?php echo $_GET['nome']; ?>">

		<button type="submit">ALTERAR</button>
</form>
