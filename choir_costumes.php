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
  <form action="choir_costumes.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Choir Costumes</h1>
<div class="divider"></div>
<p><b>Girls:</b> Jewel tone color blouse and a black skirt or loose fitting pants. No leggings or tight 
  fitting pants.</p>
<p><b>Boys:</b> Long sleeved jewel tone dress shirt, with a collar and black pants. If you do not have a 
  jewel toned shirt and do not want to buy one, you can borrow one from a friend, look at the DI, or a thrift
  store.</p>
<p>The sample of colors to choose from has a variety of shades in each color; try to match your shirt to one 
  of the shades of your chosen color as best as possible.</p>
<div class="text_center"><img src="images/jewel.png" alt="Jewel Colors" /></div>
<p>If you have any questions about what to wear please contact the someone on the costume committee:<br/><br/>
  
&nbsp;&nbsp;&nbsp;&nbsp;Jacci Florence: <a href="mailto:florence.jacci@comcast.net">florence.jacci@comcast.net</a>, 801-643-2088<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Carol Balaich: <a href="mailto:javelin75@hotmail.com">javelin75@hotmail.com</a>, 801-546-4909 / 801-628-9027<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Linda Chatwin: <a href="mailto:linda.chatwin@imail.org">linda.chatwin@imail.org</a>, 801-690-0518</p>

<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>