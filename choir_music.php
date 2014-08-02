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
    <td>Hope of Israel (1st verse)</td>
    <td>Congregation / Choir / Cast</td>
    <td class="text_center">
      <a href="http://media.ldscdn.org/pdf/music/hymns/2001-01-2590-hope-of-israel-eng.pdf?download=true" target="_blank">
        <img src="images/sheet_music.png" alt="Sheet Music" />
      </a>
    </td>
    <td class="text_center">
      <a href="https://www.lds.org/music/library/hymns/hope-of-israel?lang=eng" target="_blank">
        <img src="images/mp3.png" alt="mp3" />
      </a>
    </td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">
      <ul class="notes">
        <li><span>Opening song before the show starts</span></li>
        <li><span>You can sing parts or melody</span></li>
        <li><span><a href="cast_lyrics.php"><img src="images/document.png" />&nbsp;&nbsp;Cast lyrics help</a></span></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Shine the Light</td>
    <td>Choir / Cast / 2 Soloists</td>
    <td class="text_center">
      <a href="files/choir/2_shine_the_light/Shine_the_Light.pdf" target="_blank"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">
      <a href="https://drive.google.com/file/d/0B31UTznXWoLudXVfS0RuYzR1aDQ/edit?usp=sharing" target="_blank"><img src="images/video.png" alt="Video" /></a> 
    </td>
    <td class="odd">
      <ul class="notes">
        <li><span>The choir will be singing a different part than the cast</span></li>
        <li><span>See the video for hand motions</span></li>
        <li><span><a href="cast_lyrics.php#shine"><img src="images/document.png" />&nbsp;&nbsp;Cast lyrics help</a></span></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>3.</td>
    <td>I&#39;ve Been Working / Golden Spike</td>
    <td>Choir / Cast</td>
    <td class="text_center">
      <a href="files/choir/3_railroad/Ive_Been_Working_on_the_Railroad.pdf" target="_blank"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php#railroad"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">
      <ul class="notes">
        <li><span>
          <a href="http://youtu.be/OiwzLhC8Mig" target="_blank"><img src="images/video.png" alt="Video" />&nbsp;&nbsp;Ukulele chords video</a>
        </span></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>4.</td>
    <td>We Are Chosen</td>
    <td>Choir / 2 Soloists</td>
    <td class="text_center">
      <a href="files/choir/4_chosen/We_Are_Chosen.pdf" target="_blank"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
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
      <a href="files/choir/5_ready/I_Am_Ready.pdf" target="_blank"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
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
    <td class="odd">
      <ul class="notes">
        <li><span><a href="cast_lyrics.php#helaman"><img src="images/document.png" />&nbsp;&nbsp;Cast lyrics help</a></span></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>7.</td>
    <td>Light of A New Day</td>
    <td>Choir / Cast / 4 Soloists</td>
    <td class="text_center">
      <a href="files/choir/7_new_day/Light_of_A_New_Day.pdf" target="_blank"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="text_center"><a href="choir_mp3.php#new_day"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">
      <a href="http://youtu.be/Wf6iCq747zM" target="_blank"><img src="images/video.png" alt="Video" /></a> 
    </td>
    <td class="odd">
      <ul class="notes">
        <li><span>See the video for the ASL</span></li>
        <li><span><a href="cast_lyrics.php#new_day"><img src="images/document.png" />&nbsp;&nbsp;Cast lyrics help</a></span></li>
      </ul>
    </td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>