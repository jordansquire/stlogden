<?php
	unset($_COOKIE['logged_in']);
  setcookie('logged_in', null, -1, '/');
  setcookie('stake', null, -1, '/');
	header('Location: participate.php');
?>
