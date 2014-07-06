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
  <form action="cast_sheet_music.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Cast Music</h1>
<div class="divider"></div>
<p>We don&#39;t currently have any music available for download. Check back again later.</p>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>