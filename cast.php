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
  <form action="cast.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Cast Announcements</h1>
<div class="divider"></div>
<div class="right likebox"><iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FShineTheLightOgden&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe></div>
<h3 class="date">Sun, July 6th</h3>
<h3>Welcome!</h3>
<p>We are so very excited for your willingness to share your talents in this once in a lifetime event! 
  This website is the production team&#039;s hub for distributing instructions, music, and other 
  information, so please check back frequently for updates.</p>
<p>We would also love for you to like the Shine the Light Ogden Facebook page in the box to your right 
  to let your friends know all about the upcoming cultural celebration.</p>
<div style="height:30px; clear:both;">&nbsp;</div>
<?php include('footer.php'); ?>