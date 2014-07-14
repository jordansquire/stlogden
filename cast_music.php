<?php
  $site_context = 'cast';
  
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
  <form action="cast_music.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Cast Music</h1>
<div class="divider"></div>
<p>The mp3 files available for download are listed below. <em>To download you may need to 
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
    <td>Shine the Light</td>
    <td>Choir / Cast</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">
      <a href="https://drive.google.com/file/d/0B31UTznXWoLudmRGQm9xNktaRXM/edit?usp=sharing"><img src="images/video.png" alt="Video" /></a> 
    </td>
    <td class="text_center">
      <a href="files/cast/Shine_The_Light_Timing.pdf"><img src="images/sheet_music.png" alt="Sheet Music" /></a>
    </td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Hoedown</td>
    <td>&nbsp;-&nbsp;</td>
    <td class="text_center">
      <a href="files/cast/Hoedown.mp3"><img src="images/mp3.png" alt="mp3" /></a>
    </td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Las Alazanas (Huapango)</td>
    <td>&nbsp;-&nbsp;</td>
    <td class="text_center"><a href="files/cast/Las_Alazanas_Huapango.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">
      <a href="https://drive.google.com/file/d/0B31UTznXWoLuajFIUlh6UHRHblU/edit?usp=sharing"><img src="images/video.png" alt="Video" /></a> 
    </td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Army of Helaman / Called to Serve</td>
    <td>Choir / Cast</td>
    <td class="text_center"><a href="files/choir/6_helaman/Army_of_Helaman_Called_to_Serve.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>