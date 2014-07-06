<?php
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
  <form action="home.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Announcements</h1>
<div class="divider"></div>
<!-- GLOBAL CONTENT -->
<div class="right likebox"><iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FShineTheLightOgden&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe></div>
<?php
  if($council == 'Layton') {
?>
<!-- Layton CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Layton Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php
  }
  if ($council == 'Ogden North') {
?>
<!-- Ogden North CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Ogden North Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php
  }
  if ($council == 'Ogden South') {
?>
<!-- Ogden South CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Ogden South Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php
  }
  if ($council == 'Ogden West') {
?>
<!-- Ogden West CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Ogden West Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php
  }
  if ($council == 'Southwest Wyoming') {
?>
<!-- Southwest Wyoming CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Southwest Wyoming Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php
  }
  if ($council == 'Weber East') {
?>
<!-- Weber East CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Weber East Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php
  }
  if ($council == 'Weber West' or $council == 'ADMIN') {
?>
<!-- Weber West CONTENT -->
<h3 class="date">Thu, June 26th</h3>
<h3>Weber West Announcement</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<?php    
  }
?>
<div style="height:30px; clear:both;">&nbsp;</div>
<?php include('footer.php'); ?>