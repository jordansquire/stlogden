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
  <form action="choir_music.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Choir MP3s</h1>
<div class="divider"></div>
<p>The mp3 files available for download are listed below. <em>To download you may need to 
  right click the link and select &quot;Save Link As...&quot;</em></p>
<h3>2. Shine the Light</h3>
<table class="directory" style="font-size:14px;">
  <thead>
    <tr>
      <th style="width:250px;">Part</th>
      <th style="width:25px;">mp3</th>
      <th style="width:400px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>Full</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Minus Track</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Minus.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>All Parts</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_all.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>1st Soprano</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Soprano.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>1st Soprano with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Soprano_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>2nd Soprano</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_2nd_Soprano.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>2nd Soprano with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_2nd_Soprano_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Alto.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Alto_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Tenor.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Tenor_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Baritone</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Baritone.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Baritone with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Baritone_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Bass.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Bass_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Solo with Acc.</td>
    <td class="text_center"><a href="files/choir/2_shine_the_light/Shine_the_Light_Solo_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>

<br/>
<a name="railroad"></a>
<h3>3. I&#39;ve Been Working on the Railroad / Golden Spike</h3>
<table class="directory" style="font-size:14px;">
  <thead>
    <tr>
      <th style="width:250px;">Part</th>
      <th style="width:25px;">mp3</th>
      <th style="width:400px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>Full</td>
    <td class="text_center"><a href="files/choir/3_railroad/Ive_Been_Working_on_the_Railroad.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Minus Track</td>
    <td class="text_center"><a href="files/choir/3_railroad/Ive_Been_Working_on_the_Railroad_Minus.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>All Parts</td>
    <td class="text_center"><a href="files/choir/3_railroad/Ive_Been_Working_on_the_Railroad_all.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>

<br/>
<a name="chosen"></a>
<h3>4. We Are Chosen</h3>
<table class="directory" style="font-size:14px;">
  <thead>
    <tr>
      <th style="width:250px;">Part</th>
      <th style="width:25px;">mp3</th>
      <th style="width:400px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>Full</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Minus Track</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Minus.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>All Parts</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_All.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>1st Soprano</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Soprano.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>1st Soprano with Acc.</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Soprano_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>2nd Soprano</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_2nd_Soprano.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>2nd Soprano with Acc.</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_2nd_Soprano_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Alto.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto with Acc.</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Alto_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Tenor.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor with Acc.</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Tenor_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Baritone</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Baritone.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Baritone with Acc.</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Baritone_w_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Bass.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass with Acc.</td>
    <td class="text_center"><a href="files/choir/4_chosen/We_Are_Chosen_Minus.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>

<br/>
<a name="ready"></a>
<h3>5. I am Ready</h3>
<table class="directory" style="font-size:14px;">
  <thead>
    <tr>
      <th style="width:250px;">Part</th>
      <th style="width:25px;">mp3</th>
      <th style="width:400px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>Full</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Minus Track</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_minus.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>All Parts</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_all.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Soprano</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_soprano.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Soprano with Acc.</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_soprano_Acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_alto.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto with Acc.</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_alto_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_tenor.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor with Acc.</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_tenor_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Baritone</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_baritone.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Baritone with Acc.</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_baritone_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_bass.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass with Acc.</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_bass_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Children with Acc.</td>
    <td class="text_center"><a href="files/choir/5_ready/I_Am_Ready_children_Acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>

<br/>
<a name="helaman"></a>
<h3>6. Army of Helaman / Called to Serve</h3>
<table class="directory" style="font-size:14px;">
  <thead>
    <tr>
      <th style="width:250px;">Part</th>
      <th style="width:25px;">mp3</th>
      <th style="width:400px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>Full</td>
    <td class="text_center"><a href="files/choir/6_helaman/Army_of_Helaman_Called_to_Serve.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>

<br/>
<a name="new_day"></a>
<h3>7. Light of A New Day</h3>
<table class="directory" style="font-size:14px;">
  <thead>
    <tr>
      <th style="width:250px;">Part</th>
      <th style="width:25px;">mp3</th>
      <th style="width:400px;">Notes</th>
    </tr>
  </thead>
  <tr>
    <td>Full</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Minus Track</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_minus.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>All Parts</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_all.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Soprano</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_soprano.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Soprano with Acc.</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_soprano_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_alto.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Alto with Acc.</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_alto_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_tenor.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Tenor with Acc.</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_tenor_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_bass.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Bass with Acc.</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_bass_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Solo</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_solo.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
  <tr>
    <td>Solo with Acc.</td>
    <td class="text_center"><a href="files/choir/7_new_day/Light_of_A_New_Day_solo_acc.mp3"><img src="images/mp3.png" alt="mp3" /></a></td>
    <td class="odd">&nbsp;</td>
  </tr>
</table>
<div style="height:30px;">&nbsp;</div>
<?php include('footer.php'); ?>