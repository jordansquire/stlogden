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
      <th colspan="2" style="text-align:center;">Downloads</th>
      <th style="width:300px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>1.</td>
    <td>Hoedown</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center">
      <a href="files/cast/Hoedown.mp3"><img src="images/mp3.png" alt="mp3" /></a>
    </td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Las Alazanas (Huapango)</td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="text_center"><a href="files/cast/Las_Alazanas_Huapango.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="text_center">&nbsp;-&nbsp;</td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>