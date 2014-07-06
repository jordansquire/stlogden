<?php
  include('util.php'); 
  session_start();
  
  $request = $_SERVER['REQUEST_METHOD'];
  
  if ($request == 'POST') {
    if (isset($_POST['password']) && strtolower($_POST['password']) == "ogden") {
      if (isset($_POST['stake']) && isValidStake($_POST['stake'])) {
        setcookie('logged_in','cmsyemckjfdaoiisa',time() + (86400 * 120));
        setcookie('stake',$_POST['stake'],time() + (86400 * 120));
        header('Location: choir.php');
      } else {
        $badstake = 1;
      }
    } elseif (isset($_POST['password']) && strtolower($_POST['password']) == "@dmin") {
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

<h1>Ogden Temple Cultural Celebration</h1>
<div class="divider"></div>
<div class="right" style="margin: 0 0 20px 10px;">
  <img class="rounded" src="images/Shining-Templo.jpg" alt="Ogden Temple" width="400" />
</div>
<h3>Share your faith through song and dance!</h3> 
<p>The cultural celebration is a chance for you to share your testimonies with your friends and family and 
  those you don't know, by providing a spiritual experience through singing and dancing, in celebrating 
  the blessings of the Lord's house.</p>
<br/>
<h3>Interested in participating?</h3>
<p>Contact your local bishop to find out ways you can be part of this once in a lifetime opportunity or 
  click here to <a href="participate.php">learn more</a>.</p>
<br/>
<a name="login"></a>
<div class="form">
  <?php
    if (!isset($_COOKIE['logged_in'])) {
  ?>
    <script>
    $(function() {
      var availableTags = [
      <?php 
       $stakes = getStakes();
       foreach ($stakes as $idx => $stake) {
         if($idx != 0) {
            echo ",\n";
          }
         echo "\"".$stake->name."\"";
       }
      ?>
      ];
      $( "#stake" ).autocomplete({
        source: availableTags
      });
    });
    </script>
    <div class="left_half">
      <h3>Cast members</h3>
      <p>Select your stake and login with the password you have been provided to download music, choreography, and other information.</p>
    </div>
    <div class="right_half">
      <form action="index.php" method="post">
        <?php
          if (isset($badlogin)) {
            echo '<span class="error">The password is incorrect.</span><br />';
          } elseif (isset($login_required)) {
            echo '<span class="error">Login required.</span><br />';
          } elseif (isset($badstake)) {
            echo '<span class="error">You must select a valid Stake from the list.</span><br />';
          }
        ?>
        <input name="stake" id="stake" placeholder='Type the name of your Stake' /><br/>
        <input name="password" id="password" type="password" placeholder='Password' /><br/>
        <input type="submit" id="login" value="Login" />
      </form>
    </div>
  <?php
    } else {
  ?>
    <h3>Cast members</h3>
    <p>You are logged in! Use the navigation links above to download music, choreography, and other information.</p>
  <?php
    }
  ?>
  <div style="clear:both;"></div>
  <div class="divider_dark"></div>
  <h3>Ward Leaders</h3>
  <p><a href="http://leaders.shinethelightogden.com/">Submit the names</a> of your youth who would like to participate.</p>
</div>
<?php include('footer.php'); ?>
            