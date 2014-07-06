<?php
  $site_context = 'choir';
  
  include('util.php');
  include('login_check.php');
  include('header.php'); 
  
  $stake = $_COOKIE['stake'];
  $council = getCouncil($stake);
  
  if($stake == 'ADMIN') {
    if(isset($_POST['council'])) {
      
      $council = $_POST['council'];
    } else {
      $council = 'Layton';
    }  
?>
<div class="right council_select">
  <form action="choir_music.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Choir Music</h1>
<div class="divider"></div>
<p>The sheet music and mp3 files available for download are listed below. <em>To download you may need to 
  right click the link and select &quot;Save Link As...&quot;</em></p>
<table class="directory">
  <tr>
    <td>1.</td>
    <td>Shine the Light</td>
    <td>Sheet Music</td>
    <td><a href="files/Shine_the_Light.mp3">mp3</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>I&#39;ve Been Workin&#39; / Golden Spike</td>
    <td>Sheet Music</td>
    <td><a href="files/Workin_On_The_Railroad-Golden_Spike.mp3">mp3</a></td>
    <td>Video</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>We Are Chosen</td>
    <td>Sheet Music</td>
    <td><a href="files/We_Are_Chosen.mp3">mp3</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>I Am Ready</td>
    <td>Sheet Music</td>
    <td>mp3</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>Army of Helaman / Called to Serve</td>
    <td>&nbsp;</td>
    <td>mp3</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Light of A New Day</td>
    <td>Sheet Music</td>
    <td>mp3</td>
    <td>Video</td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>