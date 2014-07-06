<?php
  if (!isset($_COOKIE['logged_in'])) {
    header('Location: participate.php?status=1#login');
  }
?>