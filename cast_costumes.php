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
  <form action="cast_costumes.php" method="post">
    <?php getCouncilDropDown($council) ?>
  </form>
</div>
<?php
  }
?>
<h1>Cast Costumes</h1>
<div class="divider"></div>

<!-- GLOBAL CONTENT -->
<p>Your stake&#39;s dance assignment and costume information is listed below.</p>
<?php
  if($council == 'Layton') {
?>
<!-- Layton CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Layton Utah</td>
    <td>Railroad / Promontory</td>
    <td rowspan="6" style="padding: 10px;">Some of the cast members in this group will be provided a costume; either a Chinese 
      railroad worker or a costume from the time period when the golden spike was set. WE WILL LET YOU KNOW 
      AHEAD OF TIME IF YOU ARE IN THIS GROUP. You will need to come 1-1/2 hours early before the dress 
      rehearsal so we can get you the correct size costume. Please wear a pair of knee length shorts and a 
      cap sleeved t-shirt the day of the performance. That way you can put your costume on over top of your 
      shirt and shorts. Black shoes and socks. NO FLIP FLOPS.<br/><br/>
      <b>OR<br/><br/>
      if you are not notified that you are in the above group</b> you will be provided a T-shirt (that you 
      keep) you will need <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No 
      leggings or tight fitting pants.
    </td>
  </tr>
  <tr>
    <td>Layton Utah Creekside</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr>
    <td>Layton Utah East</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr>
    <td>Layton Utah Holmes Creek</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr>
    <td>Layton Utah Kays Creek</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr>
    <td>Layton Utah Layton Hills</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr class="odd">
    <td>Layton Utah North</td>
    <td>Shine the Light</td>
    <td rowspan="6" style="padding: 10px;">Some of the cast in this number will be provided turquoise or blue dresses (girls) or 
      tops (boys). WE WILL LET YOU KNOW AHEAD OF TIME IF YOU ARE IN THIS GROUP. You will need to come 1-1/2 
      hours early before the dress rehearsal so we can get you the correct size costume. Please wear a pair 
      of knee length shorts and a cap sleeved t-shirt the day of the performance. That way you can put your 
      costume on over top of your shirt and shorts. Neutral colored sandals or flat shoes. NO FLIP FLOPS.<br/><br/>
      <b>OR<br/><br/>
      if you are not notified that you are in the above group</b> you will be provided a T-shirt (that you 
      keep) you will need <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP 
      FLOPS. No leggings or tight fitting pants.
    </td>
  </tr>
  <tr class="odd">
    <td>Layton Utah Northridge</td>
    <td>Shine the Light</td>
  </tr>
  <tr class="odd">
    <td>Layton Utah South</td>
    <td>Shine the Light</td>
  </tr>
  <tr class="odd">
    <td>Layton Utah Valley View</td>
    <td>Shine the Light</td>
  </tr>
  <tr class="odd">
    <td>Layton Utah West</td>
    <td>Shine the Light</td>
  </tr>
  <tr class="odd">
    <td>Layton Utah Legacy Stake</td>
    <td>Shine the Light</td>
  </tr>
</table>

<?php
  }
  if ($council == 'Ogden North') {
?>
<!-- Ogden North CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Huntsville</td>
    <td>Solar System / <br/>Can&#39;t Go Anywhere</td>
    <td rowspan="2" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
  </tr>
  <tr>
    <td>North Ogden Ben Lomond</td>
    <td>Solar System / <br/>Can&#39;t Go Anywhere</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr class="odd">
    <td>North Ogden Coldwater</td>
    <td>Map / <br/>Can&#39;t Go Anywhere</td>
    <td rowspan="4" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
    </td>
  </tr>
  <tr class="odd">
    <td>North Ogden East</td>
    <td>Map / <br/>Can&#39;t Go Anywhere</td>
  </tr>
  <tr class="odd">
    <td>North Ogden</td>
    <td>Map / <br/>Can&#39;t Go Anywhere</td>
  </tr>
  <tr class="odd">
    <td>Lorin Farr</td>
    <td>Map / <br/>Can&#39;t Go Anywhere</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr>
    <td>Mount Lewis</td>
    <td>Hoedown (wagon train)</td>
    <td rowspan="4" style="padding: 10px;"><b>Please bring your own pioneer costume.</b><br/><br/>
      Boys: Button up shirt, khaki, tan, brown or blue pants. <b>NO LEVIS or JEANS</b>.<br/><br/>
      Girls: Cotton dress with bonnet, apron if you have one. PLEASE NO BRIGHT or FLUORESCENT COLORS. Please 
      wear shorts or pantaloons under your dress.<br/><br/>
      Flat black shoes and socks. NO FLIP FLOPS. <span class="bold red">If you do not have a poineer costume 
      and cannot borrow one from someone who has been on trek, please let us know before Sept 1st!</span>                         
    </td>
  </tr>
  <tr>
    <td>Rock Cliff</td>
    <td>Hoedown</td>
  </tr>
  <tr>
    <td>Pleasant View South</td>
    <td>Hoedown</td>
  </tr>
  <tr>
    <td>Pleasant View</td>
    <td>Hoedown</td>
  </tr>
</table>

<?php
  }
  if ($council == 'Ogden South') {
?>
<!-- Ogden South CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Burch Creek</td>
    <td>Shine the Light</td>
    <td rowspan="6" style="padding: 10px;">Some of the cast in this number will be provided turquoise or blue dresses (girls) or 
      tops (boys). WE WILL LET YOU KNOW AHEAD OF TIME IF YOU ARE IN THIS GROUP. You will need to come 1-1/2 
      hours early before the dress rehearsal so we can get you the correct size costume. Please wear a pair 
      of knee length shorts and a cap sleeved t-shirt the day of the performance. That way you can put your 
      costume on over top of your shirt and shorts. Neutral colored sandals or flat shoes. NO FLIP FLOPS.<br/><br/>
      <b>OR<br/><br/>
      if you are not notified that you are in the above group</b> you will be provided a T-shirt (that you 
      keep) you will need <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP 
      FLOPS. No leggings or tight fitting pants.
    </td>
  </tr>
  <tr>
    <td>Ogden East</td>
    <td>Shine the Light</td>
  </tr>
  <tr>
    <td>Pleasant Valley</td>
    <td>Shine the Light</td>
  </tr>
  <tr>
    <td>Ogden</td>
    <td>Shine the Light</td>
  </tr>
  <tr>
    <td>Weber Heights</td>
    <td>Shine the Light</td>
  </tr>
  <tr>
    <td>Riverdale</td>
    <td>Shine the Light</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr class="odd">
    <td>Ogden Weber</td>
    <td>Solar System</td>
    <td rowspan="4" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
  </tr>
  <tr class="odd">
    <td>South Ogden</td>
    <td>Solar System</td>
  </tr>
  <tr class="odd">
    <td>Washington Terrace East</td>
    <td>Solar System</td>
  </tr>
  <tr class="odd">
    <td>Washington Terrace West</td>
    <td>Solar System</td>
  </tr>
</table>

<?php
  }
  if ($council == 'Ogden West') {
?>
<!-- Ogden West CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Farr West</td>
    <td>Mexican</td>
    <td rowspan="2" style="padding: 10px;">A costume will be provided your you. You will need to come 2 hours early before the dress rehearsal 
      so we can get you the correct size. Please wear a pair of knee length shorts and a cap sleeved t-shirt 
      the day of the performance. That way you can put your costume on over top of your shirt and shorts. 
      Black shoes and socks. NO FLIP FLOPS.
    </td>
  </tr>
  <tr>
    <td>Harrisville</td>
    <td>Mexican</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr class="odd">
    <td>Hooper</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
    <td rowspan="7" style="padding: 10px;">Some in this number will be provided a NEPHITE costume. WE WILL 
      LET YOU KNOW AHEAD OF TIME IF YOU ARE IN THIS GROUP. You will need to come 2 hours early before the 
      dress rehearsal so we can get you the correct size costume. Please wear a pair of knee length shorts 
      and a cap sleeved t-shirt the day of the performance. That way you can put your costume on over top of 
      your shirt and shorts. Neutral colored sandals or flat shoes. NO FLIP FLOPS.<br/><br/>
      <b>OR<br/><br/>
      if you are not notified that you are in the above group</b> you will be a Sister or Elder Missionary 
      Please provide your own clothes If you have any questions what would be acceptable check the 
      <a href="https://www.lds.org/callings/missionary/dress-grooming" target="_new">church web site</a> 
      (under the &quot;Clothing&quot; section).
    </td>
  </tr>
  <tr class="odd">
    <td>Farr West Poplar</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr class="odd">
    <td>Kanesville</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr class="odd">
    <td>Mound Fort</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr class="odd">
    <td>Ogden Weber North</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr class="odd">
    <td>Ogden West</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr class="odd">
    <td>Pioneer Trail</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr>
    <td>Plain City</td>
    <td>Temple</td>
    <td rowspan="2" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
  </tr>
  <tr>
    <td>West Haven</td>
    <td>Temple</td>
  </tr>
</table>

<?php
  }
  if ($council == 'Southwest Wyoming') {
?>
<!-- Southwest Wyoming CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Coalville Stake</td>
    <td>Temple</td>
    <td rowspan="6" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
  </tr>
  <tr>
    <td>Evanston Wyoming Stake</td>
    <td>Temple</td>
  </tr>
  <tr>
    <td>Evanston Wyoming South Stake</td>
    <td>Temple</td>
  </tr>
  <tr>
    <td>Kemmerer Wyoming Stake</td>
    <td>Temple</td>
  </tr>
  <tr>
    <td>Lyman Wyoming Stake</td>
    <td>Temple</td>
  </tr>
  <tr>
    <td>Riverton Wyoming Stake</td>
    <td>Temple</td>
  </tr>
</table>

<?php
  }
  if ($council == 'Weber East') {
?>
<!-- Weber East CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Clearfield Utah North Stake</td>
    <td>Map</td>
    <td rowspan="3" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
    </td>
  </tr>
  <tr>
    <td>Clearfield Utah South Stake</td>
    <td>Map</td>
  </tr>
  <tr>
    <td>Clearfield Utah Stake</td>
    <td>Map</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr class="odd">
    <td>Morgan Utah North Stake</td>
    <td>Hoedown</td>
    <td rowspan="6"><b>Please bring your own pioneer costume.</b><br/><br/>
      Boys: Button up shirt, khaki, tan, brown or blue pants. <b>NO LEVIS or JEANS</b>.<br/><br/>
      Girls: Cotton dress with bonnet, apron if you have one. PLEASE NO BRIGHT or FLUORESCENT COLORS. Please 
      wear shorts or pantaloons under your dress.<br/><br/>
      Flat black shoes and socks. NO FLIP FLOPS. <span class="bold red">If you do not have a poineer costume 
      and cannot borrow one from someone who has been on trek, please let us know before Sept 1st!</span>                         
    </td>
  </tr>
  <tr class="odd">
    <td>Morgan Utah Stake</td>
    <td>Hoedown</td>
  </tr>
  <tr class="odd">
    <td>South Weber Utah Stake</td>
    <td>Hoedown</td>
  </tr>
  <tr class="odd">
    <td>Sunset Utah Stake</td>
    <td>Hoedown</td>
  </tr>
  <tr class="odd">
    <td>Syracuse Utah Bluff Stake</td>
    <td>Hoedown (wagon train)</td>
  </tr>
  <tr class="odd">
    <td>Syracuse Utah Stake</td>
    <td>Hoedown</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr>
    <td>Syracuse Utah Legacy Park Stake</td>
    <td>Can&#39;t Go Anywhere</td>
    <td rowspan="3" style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
    </td>
    </td>
  </tr>
  <tr>
    <td>Syracuse Utah South Stake</td>
    <td>Can&#39;t Go Anywhere</td>
  </tr>
  <tr>
    <td>Syracuse Utah West Stake</td>
    <td>Can&#39;t Go Anywhere</td>
  </tr>
</table>

<?php
  }
  if ($council == 'Weber West') {
?>
<!-- Weber West CONTENT -->
<table class="directory">
  <thead>
    <tr>
      <th style="width:200px;">Stake</th>
      <th style="width:160px;">Musical Number</th>
      <th>Costume</th>
    </tr>
  </thead>
  <tr>
    <td>Clinton Utah West Stake</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
    <td rowspan="3" style="padding: 10px;">Some in this number will be provided a NEPHITE costume. WE WILL 
      LET YOU KNOW AHEAD OF TIME IF YOU ARE IN THIS GROUP. You will need to come 2 hours early before the 
      dress rehearsal so we can get you the correct size costume. Please wear a pair of knee length shorts 
      and a cap sleeved t-shirt the day of the performance. That way you can put your costume on over top of 
      your shirt and shorts. Neutral colored sandals or flat shoes. NO FLIP FLOPS.<br/><br/>
      <b>OR<br/><br/>
      if you are not notified that you are in the above group</b> you will be a Sister or Elder Missionary 
      Please provide your own clothes If you have any questions what would be acceptable check the 
      <a href="https://www.lds.org/callings/missionary/dress-grooming" target="_new">church web site</a> 
      (under the &quot;Clothing&quot; section).
    </td>
  </tr>
  <tr>
    <td>Clinton Utah Stake</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr>
    <td>Clinton Utah North Stake</td>
    <td>Army of Helaman / <br/>Called to Serve</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr class="odd">
    <td>Roy Utah Central Stake</td>
    <td>Railroad / Promontory</td>
    <td rowspan="7" style="padding: 10px;">Some of the cast members in this group will be provided a costume; either a Chinese 
      railroad worker or a costume from the time period when the golden spike was set. WE WILL LET YOU KNOW 
      AHEAD OF TIME IF YOU ARE IN THIS GROUP. You will need to come 1-1/2 hours early before the dress 
      rehearsal so we can get you the correct size costume. Please wear a pair of knee length shorts and a 
      cap sleeved t-shirt the day of the performance. That way you can put your costume on over top of your 
      shirt and shorts. Black shoes and socks. NO FLIP FLOPS.<br/><br/>
      <b>OR<br/><br/>
      if you are not notified that you are in the above group</b> you will be provided a T-shirt (that you 
      keep) you will need <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No 
      leggings or tight fitting pants.
    </td>
  </tr>
  <tr class="odd">
    <td>Roy Utah Midland Stake</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr class="odd">
    <td>Roy Utah North Stake</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr class="odd">
    <td>Roy Utah South Stake</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr class="odd">
    <td>Roy Utah Stake</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr class="odd">
    <td>Roy Utah West Stake</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr class="odd">
    <td>West Point Utah Stake</td>
    <td>Railroad / Promontory</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  
  <tr>
    <td>West Point Utah Lakeside Stake</td>
    <td>Mexican</td>
    <td style="padding: 10px;">A costume will be provided your you. You will need to come 2 hours early before the dress rehearsal 
      so we can get you the correct size. Please wear a pair of knee length shorts and a cap sleeved t-shirt 
      the day of the performance. That way you can put your costume on over top of your shirt and shorts. 
      Black shoes and socks. NO FLIP FLOPS.
    </td>
  </tr>
</table>

<?php    
  }
?>

<!-- MORE GLOBAL CONTENT -->
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