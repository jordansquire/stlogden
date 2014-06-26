<?php
  session_start();
  
  $request = $_SERVER['REQUEST_METHOD'];
  
  if ($request == 'POST') {
    if (isset($_POST['password']) && $_POST['password'] == "temple@ogden") {
      $_SESSION['ValidUser'] = 'Yes';
      header('Location: home.php');
    } else {
      $badlogin = 1;
    }
  }
  elseif (isset($_SESSION['ValidUser']) && $_SESSION['ValidUser'] == 'No') {
    $login_required = 1;
    $_SESSION['ValidUser'] = '';
    session_destroy();
  }
  /*else {
    $_SESSION['ValidUser'] = '';
    session_destroy();
  }*/
  include('header.php'); 
?>
<h1>Ogden Temple Cultural Celebration</h1>
<div class="divider"></div>
<div class="right" style="margin: 0 0 20px 10px;">
  <img class="rounded" src="images/ogden_temple.jpg" alt="culture" width="400" />
</div>
<h3>Share your faith through song and dance!</h3> 
<p>The cultural celebration is a chance for you to share your testimonies with your friends and family and those you don't know, by providing a spiritual experience through singing and dancing, in celebrating the blessings of the Lord's house.</p>
<br/>
<h3>Interested in participating?</h3>
<p>Contact your local bishop to find out ways you can be part of this once in a lifetime opportunity.</p>
<a name="login"></a>
<div class="form">
  <div class="left_half">
    <h3>Cast members</h3>
    <p>Login with the password you have been provided to download music, choreography, and other information.</p>
  </div>
  <div class="right_half">
    <form action="index.php" method="post">
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
  <div style="clear:both;"></div>
  <div class="divider_dark"></div>
  <h3>Ward Leaders</h3>
  <p><a href="http://leaders.shinethelightogden.com/">Submit the names</a> of your youth who would like to participate.</p>
</div>
<?php include('footer.php'); ?>
            