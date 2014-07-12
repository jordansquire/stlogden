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
      <th style="width:200px;">Song</th>
      <th style="width:160px;">Who</th>
      <th colspan="3" style="text-align:center;">Downloads</th>
      <th style="width:300px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>1.</td>
    <td>Hope of Israel (1 verse)</td>
    <td>Congregation / Choir / Cast</td>
    <td class="text_center">
      <a href="http://media.ldscdn.org/pdf/music/hymns/2001-01-2590-hope-of-israel-eng.pdf?download=true">
        <img src="images/sheet_music.png" alt="Sheet Music" />
      </a>
    </td>
    <td class="text_center">
      <a href="https://www.lds.org/music/library/hymns/hope-of-israel?lang=eng">
        <img src="images/mp3.png" alt="mp3" />
      </a>
    </td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">
      <ul class="notes">
        <li><span>Opening Song</span></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Shine the Light</td>
    <td>Choir / Cast / 2 Soloists</td>
    <td class="text_center">
      <a href="files/choir/2_shine_the_light/Shine_the_Light.pdf"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">
      <ul class="notes">
        <li><span>The choir will be singing a different part than the cast</span></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>3.</td>
    <td>I&#39;ve Been Working / Golden Spike</td>
    <td>Choir</td>
    <td class="text_center">
      <a href="files/choir/3_railroad/Ive_Been_Working_on_the_Railroad.pdf"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php#railroad"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>We Are Chosen</td>
    <td>Choir / 2 Soloists</td>
    <td class="text_center">
      <a href="files/choir/4_chosen/We_Are_Chosen.pdf"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php#chosen"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>5.</td>
    <td>I Am Ready</td>
    <td>Choir / Children&#39;s Choir</td>
    <td class="text_center">
      <a href="files/choir/5_ready/I_Am_Ready.pdf"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php#ready"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>6.</td>
    <td>Army of Helaman / Called to Serve</td>
    <td>Choir / Cast</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center"><a href="choir_mp3.php#helaman"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Light of A New Day</td>
    <td>Choir / Cast / 4 Soloists</td>
    <td class="text_center">
      <a href="files/choir/7_new_day/Light_of_A_New_Day.pdf"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php#new_day"><img src="images/mp3.png" alt="mp3" /></a></td>
    <!--<td class="text_center"><img src="images/video.png" alt="Video" /></td>-->
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>