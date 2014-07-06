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
  include('sheet_music.php');
?>