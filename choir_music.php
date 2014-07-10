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
  <thead>
    <tr>
      <th>#</th>
      <th>Song</th>
      <th>Who</th>
      <th colspan="3" style="text-align:center;">Downloads</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tr>
    <td>1.</td>
    <td>Hope of Israel (1 verse)</td>
    <td>Congregation / Choir / Cast</td>
    <td class="text_center"><a href="http://media.ldscdn.org/pdf/music/hymns/2001-01-2590-hope-of-israel-eng.pdf?download=true">Sheet Music</a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td>Opening Song</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Shine the Light</td>
    <td>Choir / Cast / 2 Soloists</td>
    <td class="text_center">Sheet Music</td>
    <td class="text_center"><a href="files/Shine_the_Light.mp3">mp3</a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>I&#39;ve Been Workin&#39; / Golden Spike</td>
    <td>Choir</td>
    <td class="text_center">Sheet Music</td>
    <td class="text_center"><a href="files/Workin_On_The_Railroad-Golden_Spike.mp3">mp3</a></td>
    <td class="text_center">Video</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>We Are Chosen</td>
    <td>Choir / 2 Soloists</td>
    <td class="text_center">Sheet Music</td>
    <td class="text_center"><a href="files/We_Are_Chosen.mp3">mp3</a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>I Am Ready</td>
    <td>Choir / Children&#39;s Choir</td>
    <td class="text_center">Sheet Music</td>
    <td class="text_center">mp3</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Army of Helaman / Called to Serve</td>
    <td>Choir / Cast</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center">mp3</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Light of A New Day</td>
    <td>Choir / Cast / 4 Soloists</td>
    <td class="text_center">Sheet Music</td>
    <td class="text_center">mp3</td>
    <td class="text_center">Video</td>
    <td>&nbsp;</td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>