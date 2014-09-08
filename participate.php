<?php
  include('util.php'); 
  session_start();
  
  $request = $_SERVER['REQUEST_METHOD'];
  
  if ($request == 'POST') {
    if (isset($_POST['stake']) && isValidStake($_POST['stake'])) {
      setcookie('logged_in','cmsyemckjfdaoiisa',time() + (86400 * 120));
      setcookie('stake',$_POST['stake'],time() + (86400 * 120));
      header('Location: choir.php');
    } else {
      $badstake = 1;
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

<h1>Participate in the Ogden Temple<br/><br/>Cultural Celebration</h1>
<div class="divider"></div>
<div class="error alert">
  Youth: It&#39;s still not too late to participate! <a href="https://leaders.shinethelightogden.com/Announcement.pdf" target="_blank">Learn more...</a>
</div>
<h3>Shine the Light</h3> 
<p>Attention all youth 12-18 in the Ogden Utah Temple District. The cultural celebration is a chance for you 
  to share your testimonies with your friends and family and those you don't know, by providing a spiritual 
  experience through singing and dancing, in celebrating the blessings of the Lord's house.</p>
<p>Everyone who would like to participate will be welcomed. Contact your local bishop to find out ways you 
  can be part of this once in a lifetime opportunity. Not sure who your bishop is? Enter your address 
  <a href="http://www.mormon.org/meetinghouse">here</a>.</p>
<p><b>All participants will need to complete a <a href="files/Release_to_Use_Image.pdf">release form</a> and 
  <a href="files/parental-permission-medical-release.pdf">permission slip</a></b>.</p>
<h3>Shine the Light Preview</h3>
<iframe width="560" height="315" src="//www.youtube.com/embed/sQ0e2L5VAQM" frameborder="0" allowfullscreen></iframe>
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
      <h3>Login</h3>
      <p>Select your stake and login to download music, choreography, and other information.</p>
    </div>
    <div class="right_half">
      <form action="participate.php" method="post">
        <?php
          if (isset($badlogin)) {
            echo '<span class="error">The password is incorrect.</span><br />';
          } elseif (isset($login_required)) {
            echo '<span class="error">You must select a Stake from the list.</span><br />';
          } elseif (isset($badstake)) {
            echo '<span class="error">You must select a valid Stake from the list.</span><br />';
          }
        ?>
        <input name="stake" id="stake" placeholder='Type the name of your Stake' /><br/>
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