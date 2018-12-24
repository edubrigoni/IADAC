<?php
	if (isset($_POST['email']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		echo "Enviou email é ".$email;
	}
?>