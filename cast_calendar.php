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
  <form action="cast_calendar.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
  $cast = getCast($council);
?>
<h1>Cast Calendar</h1>
<div class="divider"></div>
<div class="information right" style="width:300px; margin-left:50px;">
  <h4 style="margin:0 0 10px 0; text-align:center;">Your Information</h4>
  <table class="directory">
    <tr>
      <td style="border-top: 1px solid #CCCCCC;">Cast:</td>
      <td style="border-top: 1px solid #CCCCCC;"><?php echo $cast; ?></td>
    </tr>
    <tr>
      <td>Coordinating Council:</td>
      <td><?php echo $council; ?></td>
    </tr>
    <tr>
      <td>Stake:</td>
      <td><?php echo $stake; ?></td>
    </tr>
  </table>
  <div class="prompt" style="text-align:right;">Not the right Stake? <a href="logout.php">Change it</a></div>
</div>
<p>Some events require you to know your Cast and Coordinating Council.</p>
<ul class="notes">
  <li><span>
    <a href="files/DanceAssignments.xlsx">Click here to download your stake&#39;s dance assignments, and rehearsal schedule!</a>
  </span></li>
</ul>
<p>
</p>
<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=l25rupi4rl3c4ec8np9tbijfec%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=America%2FDenver" style=" border-width:0 " width="835" height="800" frameborder="0" scrolling="no"></iframe>
<div style="height:30px; clear:both;">&nbsp;</div>
<?php include('footer.php'); ?>