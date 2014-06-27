<?php
	unset($_COOKIE['logged_in']);
  setcookie('logged_in', null, -1, '/');
	header('Location: index.php');
?>
