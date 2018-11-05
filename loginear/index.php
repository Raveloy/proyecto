<?php
	require "header.php";
?>

	<main>
		<?php
			if (isset($_SESSION['userId'])) {
				echo '<p class="login-status">estas conectado</p>';
			}
			else{
				echo '<p class="login-status">estas desconectado</p>';
			}
		?>
	</main>

<?php
	require "footer.php";
?>