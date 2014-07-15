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
  <form action="choir.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
  $cast = getCast($council);
?>
<h1>Choir Announcements</h1>
<div class="divider"></div>
<div class="right likebox">
  <div class="error alert" style="border-bottom:none;">All participants need to complete a <a href="files/Release_to_Use_Image.pdf">release form</a>
    and <a href="files/parental-permission-medical-release.pdf">permission slip</a>
  </div>
  <div class="information">
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
  <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FShineTheLightOgden&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
</div>
<h3 class="date">Tue, July 15th</h3>
<h3>Welcome!</h3>
<p>I am so excited to welcome you as part of the Ogden Temple Cultural Celebration Youth Choir. The 
  theme for the Celebration will be &quot;Shine the Light.&quot; You will have the unique opportunity of being 
  seated in the Dee-Events Center where you will get to see the program in its entirety.  Much 
  preparation has been made so that you will have a once-in-a-lifetime experience, and the chance to 
  share your talents to bless the lives of others. What a wonderful feeling it is to be part of 
  something so special. You will remember this experience and the feelings you will have for the rest 
  of your life. There are so many blessings that await you as you participate in this choir, such as: 
  your talents will increase; you will have the opportunity to feel the spirit often; your testimony 
  will grow; you will meet other youth and make new friends; and so many more.</p>
  
<p>As with anything that is worthwhile, it takes hard work and dedication. I know how busy life can 
  be, but knowing that this is an opportunity to be a part of something that will have an impact on 
  the rest of your life is most certainly worth making some sacrifices for. Your Heavenly Father wants 
  you to be a part of this, and He will bless your life because of your willingness to participate. I 
  hope that you will prepare yourself both mentally and spiritually for this experience. Please pray 
  for our choir&#39;s success. With this short period of time that we have, I know the Lord will answer 
  our prayers and bless us to accomplish this task in a way that will be astounding to all who 
  participate. He wants us to succeed, and you are a huge part of that success. If we all do our part 
  to the best of our ability, with a committed focus on our goal, I know we will be magnified to 
  complete this marvelous task ahead. I cannot wait to meet you! You are important and needed!! I 
  can&#39;t wait for you to sing the beautiful music that I and others have written for you to sing. 
  Follow your stake director, work hard on your parts, practice every opportunity you get and 
  don&#39;t be afraid to ask for help. Be the best you can be and I know the Lord will do the rest. I 
  have seen His hand in my life already as I have prepared for this incredible opportunity. Always 
  remember that this choir is providing for you an opportunity to show your Heavenly Father how 
  grateful you are for the blessings of the temple. May we be united in our efforts together.</p>

<p>With Much Love and Gratitude,</p>

<p>Sister Brita Miles<br/>
Ogden Temple Cultural Celebration<br/>
Music Director</p>

<h3 class="date">Sun, July 6th</h3>
<h3>Welcome!</h3>
<p>We are so very excited for your willingness to share your talents in this once in a lifetime event! 
  This website is the production team&#039;s hub for distributing instructions, music, and other 
  information, so please check back frequently for updates.</p>
<p>We would also love for you to like the Shine the Light Ogden Facebook page in the box to your right 
  to let your friends know all about the upcoming cultural celebration.</p>
<div style="height:30px; clear:both;">&nbsp;</div>
<?php include('footer.php'); ?>