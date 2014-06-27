<?php
  if (!isset($_COOKIE['logged_in'])) {
    header('Location: index.php?status=1#login');
  }
  
  include('header.php'); 
?>
<h1>Crew</h1>
<div class="divider"></div>
<h3>Lorem Ipsum</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed malesuada nunc, sed aliquet diam. Suspendisse ac tortor tincidunt, vulputate diam eget, pellentesque lorem. Ut et velit sed eros hendrerit scelerisque vel et nulla. Quisque mattis blandit rhoncus. Praesent mattis, erat sit amet suscipit tempus, justo libero vehicula mauris, nec vehicula felis augue in libero. Sed id pharetra risus. Etiam tincidunt vel tortor ac lobortis. Sed dictum mollis pharetra. Donec euismod velit id massa sagittis, ornare pretium erat bibendum. Nulla iaculis ipsum nunc, elementum rhoncus ipsum dignissim vel. Integer aliquet tempor turpis, eget consectetur nisi.</p>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>