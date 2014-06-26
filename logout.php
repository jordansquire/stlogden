<?php
	session_start();
	$_SESSION['ValidUser'] = 'No';
	session_destroy();
	header('Location: index.php');
?>
