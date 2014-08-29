<?php
  include('util.php'); 
  session_start();
  
  $request = $_SERVER['REQUEST_METHOD'];
  
  if ($request == 'POST') {
    if (isset($_POST['password']) && strtolower($_POST['password']) == "@dmin") {
      setcookie('logged_in','cmsyemckjfdaoiisa',time() + (86400 * 120));
      setcookie('stake','ADMIN',time() + (86400 * 120));
      header('Location: choir.php');
    } else {
      $badlogin = 1;
    }
  }
  elseif (isset($_GET['status'])) {
    $login_required = 1;
  }
  include('header.php'); 
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

<h1>Admin Login</h1>
<a name="login"></a>
<div class="form">
  <?php
    if (!isset($_COOKIE['logged_in'])) {
  ?>
    <div class="left_half">
      <h3>Login</h3>
      <p>Enter the admin password.</p>
    </div>
    <div class="right_half">
      <form action="participate_old.php" method="post">
        <?php
          if (isset($badlogin)) {
            echo '<span class="error">The password is incorrect.</span><br />';
          } elseif (isset($login_required)) {
            echo '<span class="error">Login required.</span><br />';
          }
        ?>
        <input name="password" id="password" type="password" placeholder='Password' /><br/>
        <input type="submit" id="login" value="Login" />
      </form>
    </div>
  <?php
    } else {
  ?>
    <?php 
      if (isset($_COOKIE['stake'])) {
    ?>
      <p>You have selected the <b><?php echo $_COOKIE['stake']; ?> Stake</b>. If this is incorrect, 
        <a href="logout.php">change it here</a>.</p>
    <?php
      }
    ?>
    <div class="left_half">
      <a class="button" href="cast.php">Cast Website</a>
    </div>
    <div class="right_half">
      <a class="button" href="choir.php">Choir Website</a>
    </div>
  <?php
    }
  ?>
  <div style="clear:both;"></div>
</div>
<?php include('footer.php'); ?>