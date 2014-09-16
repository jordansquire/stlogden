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
<p>We just want to say &quot;Thank You&quot; for all of the hard work and effort everyone has put into 
  getting ready for the Ogden Temple Celebration for the Youth. This truly is a once in a lifetime event 
  for the kids involved.</p>
 
  <p>I hope we can all remember what we are celebrating.</p>
 
<p>This is our opportunity to thank out Heavenly Father with a celebration dedicated to him for the great 
  blessing of having &quot;HIS&quot; house here for us to go to, &quot;HIS&quot; house where we can go to 
  worship him, obtain blessings and to serve our fellow men. This is truly a celebration to our God whom we 
  honor and love.</p>
 
<p>Please as we get ready for this event have a good attitude, be positive and Christ Like, are all working 
  to achieve the same goal.</p>
 
<p>When we build a temple to our Lord we use the finest workmanship, the best quality of everything goes 
  into building his house. That is the tradition we are trying to follow in putting on this celebration 
  dedicated to him.</p>
 
<p>We understand that finding the things we have asked you to get for this performance takes a lot of time 
  and effort on your part. We are not only performing for our prophet but for our Savior Jesus Christ.</p>
 
<p>We are asking that there be no white or pastel shirts in the choir, we want it to look the best it 
  possibly can, we want it to look as good as it sounds; because it is truly and amazing choir.</p> 
 
<p>We realize that 4000 kids are now looking for the same thing.  So any shirt you can find that is a deep 
  color will be ok.  (No pastels and No black) If you are having difficulty finding the correct color of 
  shirt the DI in Layton still has many to choose from. I&#39;m sure other DI&#39;s are the same. For the girls 
  they may not be able to find the style of shirt you wear today but we are looking for color not style of 
  shirt, you only have to wear it one time. We do not want this be a financial burden on anyone.  Another 
  option is to dye a lighter colored shirt to the color you need.</p>
 
<p>Again, thank you for all of you hard work and effort we truly appreciate all you are doing to help 
  &quot;Shine the Light&quot; of our Savior Jesus Christ.  It is going to be an amazing performance.</p>
 
<p>The Costume Committee</p> 
 
<p>D&amp;C 97:15-16</p>

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