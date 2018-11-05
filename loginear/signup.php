<?php
	require "header.php";
?>

	<main>
		<h1>Ingresar</h1>
		<form action="includes/signup.inc.php" method="post">
			<input type="text" name="uid" placeholder ="Usuario">
			<input type="text" name="mail" placeholder ="Email">
			<input type="password" name="pwd" placeholder ="Contraseña">
			<input type="password" name="pwd-repeat" placeholder ="Repetir Contraseña">
			<button type="submit" name="signup-submit">Ingresar</button>
		</form>
	</main>

<?php
	require "footer.php";
?>