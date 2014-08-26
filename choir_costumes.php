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
<p style="text-align: center; color: red; font-weight: bold;">OFFICIAL COSTUME INFORMATION FOR THE CHOIR</p>
<p>There has been a lot of confusion over the costumes for the choir. I apologize for the confusion I am not 
  sure where the disconnect is coming from. This is from the costume committee:<br/><br/>
Linda Chatwin<br/>
Jacci Florence<br/>
Carol Balaich</p>

<p><span style="color: red; font-weight: bold;">Choir Girls:</span> need to wear a jewel tone blouse from the 
  colors below. It can be long sleeved, 3/4 sleeved, or short sleeved. It <b>DOES NOT</b> need to button up 
  the front, no t-shirts or cardigan sweaters please. <b><u>NO JEWERLY</u></b>. Girls can wear either skirts 
  <b>or pants</b>. Which ever they have or feel most comfortable in. We do not want you to have to buy a 
  skirt if you do not have one! No leggings or tight fitting pants.</p>
  
<p><span style="color: red; font-weight: bold;">Choir Boys:</span> Long sleeved jewel tone colored dress 
  shirt, with a collar, a tie that matches the shirt (it does not need to be a solid color), and black pants. 
  If you do not have a jewel toned shirt and do not want to buy one, you can borrow one from a friend, look 
  at the DI, or a thrift store.</p>
  
<p>The sample of colors to choose from has a variety of shades in each color; try to match your shirt to one 
  of the shades of your chosen color as best as possible.</p>
<div class="text_center"><img src="images/jewel.png" alt="Jewel Colors" /></div>

<div class="divider"></div>
<p>If you have any questions about what to wear please contact the someone on the costume committee:<br/><br/>
  
&nbsp;&nbsp;&nbsp;&nbsp;Jacci Florence: <a href="mailto:florence.jacci@comcast.net">florence.jacci@comcast.net</a>, 801-643-2088<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Carol Balaich: <a href="mailto:javelin75@hotmail.com">javelin75@hotmail.com</a>, 801-546-4909 / 801-628-9027<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Linda Chatwin: <a href="mailto:linda.chatwin@imail.org">linda.chatwin@imail.org</a>, 801-690-0518</p>

<div class="divider"></div>
<h3>Stake Volunteer Costume Assignments</h3>
<p>A spreadsheet explaining the assignment for your stake is attached. The costume committee will contact 
  each stake to explain your assignment. If you have questions, please contact one of the individuals 
  listed above.</p>
<a href="files/STAKE_VOLUNTEER_COSTUME_ASSIGNMENTS(7-29).xlsx">Stake Costume Assignments</a>

<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>