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
      
      <p class="bold text_solo underline">Additional information about the Railroad number</p>
      <p>
        <span class="text_choir">Layton Utah:</span> 25 girls and 25 boys will be given costumes to wear<br/>
        <span class="text_choir">Layton Utah Creekside:</span> 10 girls and 15 boys will be given costumes to wear<br/>
        <span class="text_choir">Layton Utah East:</span> 25 girls and 30 boys will be given costumes to wear<br/>
        <span class="text_choir">Layton Utah Holmes Creek:</span> 5 girls and 10 boys will be given costumes to wear<br/>
        <span class="text_choir">Layton Utah Kays Creek:</span> 10 girls and 20 boys will be given costumes to wear<br/>
        <span class="text_choir">Layton Utah Layton Hills:</span> 25 girls and 35 boys will be given costumes to wear
      </p>
      
      <p><span class="text_solo">BOYS: THE BOYS WHO GET A COSTUME FROM US WILL NEED TO</span> Please wear a 
        pair of knee length shorts and a t-shirt the day of the performance. That way you can put your 
        costume on over top of your shirt and shorts. PLEASE WEAR BLACK SHOES AND <span class="underline">
        WHITE SOCKS</span>!</p>    
                                                                                                                    
      <p><span class="text_solo">GIRLS: THE GIRLS WHO GET A COSTUME FROM US WILL NEED TO</span> Please wear a 
        pair of BLACK CAPRI PANTS if they have them, if not black pants and a cap sleeve t-shirt the day of 
        the performance. That way you can put your costume (a shirt) on over top of your cap sleeve t-shirt. 
        Please <span class="underline">WEAR WHITE KNEE LENGTH SOCKS</span> AND BLACK SHOES!</p>
                              
      <p class="blue_highlight">If you have more youth than the numbers listed above please have them wear 
        black pants, black shoes and socks. They will be given a t-shirt to wear for the performance.</p>

      <p>All of the youth will get a t-shirt to wear while sitting in the audience. They can put it on over 
        top of their costumes.</p>

      <p>Some cast members will be in the promontory/ Trapper costumes, your stake will decide who this will 
        be. We will have your costumes for you to try on, on SEPT 8th at 5:00 at the Stake Center just North 
        of the Dee Event Center.</p>

      <p>The address is:<br/>
        1401 Country Hills Drive<br/>
        Ogden Utah 84403</p>
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
      FLOPS. No leggings or tight fitting pants.<br/><br/>
      
      <p class="bold text_solo underline">Additional information about the Shine the Light number</p>
      
      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or skirt, 
        black shoes and socks. (If girls choose to wear a skirt they need opaque black tights so everything from the 
        waist down is black). NO FLIP FLOPS</p>
        
      <p class="bold text_solo">*** CHANGE FROM ORIGINAL INFORMATION PASSED OUT ***</p>
      
      <p>I HAD TOLD PEOPLE FROM THE BURCH CREEK, OGDEN EAST, OGDEN AND WEBER HEIGHTS STAKES that their youth 
        would get a costume to wear.</p>
 
      <p>I WAS WRONG!!!!</p> 
      
      <p>All of the stakes in the &quot;Shine the Light&quot; number will wear black pants or skirt with black 
        shoes and socks and the T-shirt we will give them.</p>
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
      
      <p class="bold text_solo underline">Additional information</p>
      
      <p class="bold text_solo">*** CHANGE FROM ORIGINAL INFORMATION PASSED OUT ***</p>
      
      <p>If you were assigned to wear a costume at your last practice (you should know who you are) the 
        morning of the event please wear t-shirt and shorts and Black flat shoes, NO FLIP FLOPS. They will 
        put the costume on over top of their own clothes. There is no place for them to change or to put 
        their clothes if they did change.</p>

      <p>They will also get a t-shirt to wear (that they keep) over top of their costume while sitting in the 
        audience waiting for their time to go on stage.</p> 

      <p>The youth <b>WHO DO NOT HAVE A COSTUME</b> will be provided a T-shirt (that they keep) they will 
        need to wear THEIR OWN Black pants or skirt, black shoes and socks. (If girls choose to wear a skirt 
        xthey need opaque black tights so everything from the waist down is black). NO FLIP FLOPS</p>
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
      
      <p class="bold text_solo underline">Additional information</p>
       
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (if girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>

      <p>ALL The youth in these numbers will need to go to the Dee Event Center the morning of the 
        performance. If the can be there promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will 
        make things go faster. At that time they will be given a t-shirt to wear  for the performance.</p>

       <p>There is no place for people to change clothes so girls please wear a cap sleeve shirt the morning of 
         the performance and you can put your t-shirt on over top of it.</p>
         
       <p>Boys wear a shirt with no collar that you can wear the t-shirt over top of as there will be no place 
         to put a shirt you take off.</p>
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
      
      <p class="bold text_solo underline">Additional information about the Hoedown number</p>
      
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (If girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>
      
      <p>Please let me know if I have your assignment incorrect.</p>
      
      <p>Your Stake is in the Hoedown number for the celebration, please pass the following information on to 
        your youth.</p>
        
      <p style="bold">Please bring your own pioneer costume.</p>
      
      <p>BOYS: Button up shirt, khaki, tan, brown or blue pants NO LEVIS or JEANS, Hat if you have one.</p>
       
      <p>GIRLS: Cotton dress with bonnet, apron if you have one; OR skirt with button up blouse, 
        <span class="underline">NO</span> t-shirts please.</p> 
      
      <p>PLEASE NO BRIGHT or FLUORESCENT COLORS</p> 
      
      <p>Please wear shorts or pantaloons under your dress. Flat black shoes and socks. NO FLIP FLOPS</p>
      
      <p class="bold red">If you do not have one and cannot borrow one from someone who has been on trek 
        please let us know before Sept 1st we do have extra pioneer costumes if they are needed.</p>    
      
      <p>ALL The youth in this number will need to come to the gym at the church just north of the Dee Event 
        Center BEFORE they go to the Dee Event Center the morning of the performance. If the can be there 
        promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will make things go faster.</p> 
      
      <p>We will check their costumes and possibly give them something extra to wear, (apron for girls if 
        they do to have one, vest, suspenders and a hat for boys)</p>
      
      <p>The youth will get a t-shirt to take home they can pick it up at the Dee Event Center AFTER they get 
        their costume checked.</p>
      
      <p>Please text/call/or e-mail me if you have any questions<br/> 
        Linda Chatwin 801-690-0518</p>
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
      
      <p class="bold text_solo underline">Additional information about the Shine the Light number</p>
      
      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or skirt, 
        black shoes and socks. (If girls choose to wear a skirt they need opaque black tights so everything from the 
        waist down is black). NO FLIP FLOPS</p>
        
      <p class="bold text_solo">*** CHANGE FROM ORIGINAL INFORMATION PASSED OUT ***</p>
      
      <p>I HAD TOLD PEOPLE FROM THE BURCH CREEK, OGDEN EAST, OGDEN AND WEBER HEIGHTS STAKES that their youth 
        would get a costume to wear.</p>
 
      <p>I WAS WRONG!!!!</p> 
      
      <p>All of the stakes in the &quot;Shine the Light&quot; number will wear black pants or skirt with black 
        shoes and socks and the T-shirt we will give them.</p>
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
      
      <p class="bold text_solo underline">Additional Information about the Solar System number</p>
      
      <p class="bold text_solo">*** CHANGE FROM ORIGINAL INFORMATION PASSED OUT ***</p>
      
      <p>If you were assigned to wear a costume at your last practice (you should know who you are) the 
        morning of the event please wear t-shirt and shorts and Black flat shoes, NO FLIP FLOPS. They will 
        put the costume on over top of their own clothes. There is no place for them to change or to put 
        their clothes if they did change.</p>

      <p>They will also get a t-shirt to wear (that they keep) over top of their costume while sitting in the 
        audience waiting for their time to go on stage.</p> 

      <p>The youth <b>WHO DO NOT HAVE A COSTUME</b> will be provided a T-shirt (that they keep) they will 
        need to wear THEIR OWN Black pants or skirt, black shoes and socks. (If girls choose to wear a skirt 
        xthey need opaque black tights so everything from the waist down is black). NO FLIP FLOPS</p>
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
      
      <p class="bold text_solo underline">Additional Information about the Mexican number</p>
      
      <p><b>The adult leaders</b> will need to make the assignments as to what girls get the dresses and what 
        girls need black pants and a long sleeved shirt <b>AHEAD OF TIME</b> so when they come the morning of 
        the event they will know what they need; and so the kids who need black pants will have them.</p>
        
      <p>The youth will be provided a t-shirt to wear over their costume while sitting in the audience 
        waiting for their turn to go on stage.</p>

      <p class="bold red">Farr West</p> 

      <p><b>50 GIRLS</b> from your stake will get Hispanic dresses to wear during the performance. When they 
        come the morning of the event please have them wear t-shirt and shorts (color does not mater) and 
        Black flat shoes, NO FLIP FLOPS. They will put the costume on over top of their own clothes. There is 
        no place for them to change or to put their clothes if they did change.</p> 

      <p>Any girls you have more than this will need to wear black pants, black shoes and socks &amp; a LONG 
        sleeved bright colored shirt that has a collar and buttons up the front OR a white long sleeved shirt 
        that has a collar and buttons up the front (Dress shirt). <b>!!!!PLEASE DON&#39;T MAKE THEM BUY A NEW 
        SHIRT</b>, THEY CAN BORROW A BOYS SHIRT FROM A NEIGHBOR OR FRIEND OR GET ONE AT THE DI OR SAVERS IF 
        THEY DO NOT HAVE ONE!!! They will get a black vest, sash and bow tie to wear.</p>

      <p><b>BOYS:</b> will need to wear black pants, black shoes and socks &amp; a LONG sleeved bright 
        colored shirt that has a collar and buttons up the front OR a white long sleeved shirt that has a 
        collar and buttons up the front (Dress shirt). They will get a black vest, sash and bow tie to wear.</p>

      <p class="bold red">Harrisville</p> 

      <p><b>100 GIRLS</b> from your stake will get Hispanic dresses to wear during the performance. When they 
        come the morning of the event please have them wear t-shirt and shorts (color does not mater) and 
        Black flat shoes, NO FLIP FLOPS. They will put the costume on over top of their own clothes. There is 
        no place for them to change or to put their clothes if they did change.</p>

      <p>Any girls you have more than this will need to wear black pants, black shoes and socks &amp; a LONG 
        sleeved bright colored shirt that has a collar and buttons up the front OR a white long sleeved shirt 
        that has a collar and buttons up the front (Dress shirt). <b>!!!PLEASE DON&#39;T MAKE THEM BUY A NEW 
        SHIRT</b>, THEY CAN BORROW A BOYS SHIRT FROM A NEIGHBOR OR FRIEND OR GET ONE AT THE DI OR SAVERS IF 
        THEY DO NOT HAVE ONE!!! They will get a black vest, sash and bow tie to wear.</p>

      <p><b>BOYS:</b> will need to wear black pants, black shoes and socks &amp; a LONG sleeved bright 
        colored shirt OR a white long sleeved shirt. They will get a black vest, sash and bow tie to 
        wear.</p>
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
      
      <p class="bold text_solo underline">Additional Information</p>
      
      <p>The youth in this number who are the <b>&quot;Army of Helaman&quot;</b>, both boys and girls will be 
        given a costume the morning of the event as well as a t-shirt.</p>

      <p>When they come the morning of the event please have them wear t-shirt and shorts (color does not 
        matter) and neutral colored sandals NO FLIP FLOPS. They will put the costume on over top of their own 
        clothes. There is no place for them to change or to put their clothes if they did change.</p> 

      <p>They will also be provided a t-shirt to wear over their costume while sitting in the audience 
        waiting for their turn to go on stage.</p>

      <p>The <b>Missionary</b> can wear anything that a missionary would wear, we do not want them to look 
        all the same, the girls can go to the church web site to see approved sister missionary attire. The 
        boys need dress pants, white shirt and tie, anything missionary appropriate.</p>
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
      
      <p class="bold text_solo underline">Additional information</p>
       
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (if girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>

      <p>ALL The youth in these numbers will need to go to the Dee Event Center the morning of the 
        performance. If the can be there promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will 
        make things go faster. At that time they will be given a t-shirt to wear  for the performance.</p>

     <p>There is no place for people to change clothes so girls please wear a cap sleeve shirt the morning of 
       the performance and you can put your t-shirt on over top of it.</p>
       
     <p>Boys wear a shirt with no collar that you can wear the t-shirt over top of as there will be no place 
       to put a shirt you take off.</p>
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
      
      <p class="bold text_solo underline">Additional information</p>
       
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (if girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>

      <p>ALL The youth in these numbers will need to go to the Dee Event Center the morning of the 
        performance. If the can be there promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will 
        make things go faster. At that time they will be given a t-shirt to wear  for the performance.</p>

     <p>There is no place for people to change clothes so girls please wear a cap sleeve shirt the morning of 
       the performance and you can put your t-shirt on over top of it.</p>
       
     <p>Boys wear a shirt with no collar that you can wear the t-shirt over top of as there will be no place 
       to put a shirt you take off.</p>
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
      
      <p class="bold text_solo underline">Additional information</p>
       
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (if girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>

      <p>ALL The youth in these numbers will need to go to the Dee Event Center the morning of the 
        performance. If the can be there promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will 
        make things go faster. At that time they will be given a t-shirt to wear  for the performance.</p>

     <p>There is no place for people to change clothes so girls please wear a cap sleeve shirt the morning of 
       the performance and you can put your t-shirt on over top of it.</p>
       
     <p>Boys wear a shirt with no collar that you can wear the t-shirt over top of as there will be no place 
       to put a shirt you take off.</p>
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
    <td rowspan="5"><b>Please bring your own pioneer costume.</b><br/><br/>
      Boys: Button up shirt, khaki, tan, brown or blue pants. <b>NO LEVIS or JEANS</b>.<br/><br/>
      Girls: Cotton dress with bonnet, apron if you have one. PLEASE NO BRIGHT or FLUORESCENT COLORS. Please 
      wear shorts or pantaloons under your dress.<br/><br/>
      Flat black shoes and socks. NO FLIP FLOPS. <span class="bold red">If you do not have a poineer costume 
      and cannot borrow one from someone who has been on trek, please let us know before Sept 1st!</span>
      
      <p class="bold text_solo underline">Additional information about the Hoedown number</p>
      
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (If girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>
      
      <p>Please let me know if I have your assignment incorrect.</p>
      
      <p>Your Stake is in the Hoedown number for the celebration, please pass the following information on to 
        your youth.</p>
        
      <p style="bold">Please bring your own pioneer costume.</p>
      
      <p>BOYS: Button up shirt, khaki, tan, brown or blue pants NO LEVIS or JEANS, Hat if you have one.</p>
       
      <p>GIRLS: Cotton dress with bonnet, apron if you have one; OR skirt with button up blouse, 
        <span class="underline">NO</span> t-shirts please.</p> 
      
      <p>PLEASE NO BRIGHT or FLUORESCENT COLORS</p> 
      
      <p>Please wear shorts or pantaloons under your dress. Flat black shoes and socks. NO FLIP FLOPS</p>
      
      <p class="bold red">If you do not have one and cannot borrow one from someone who has been on trek 
        please let us know before Sept 1st we do have extra pioneer costumes if they are needed.</p>    
      
      <p>ALL The youth in this number will need to come to the gym at the church just north of the Dee Event 
        Center BEFORE they go to the Dee Event Center the morning of the performance. If the can be there 
        promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will make things go faster.</p> 
      
      <p>We will check their costumes and possibly give them something extra to wear, (apron for girls if 
        they do to have one, vest, suspenders and a hat for boys)</p>
      
      <p>The youth will get a t-shirt to take home they can pick it up at the Dee Event Center AFTER they get 
        their costume checked.</p>
      
      <p>Please text/call/or e-mail me if you have any questions<br/> 
        Linda Chatwin 801-690-0518</p>
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
      
      <p class="bold text_solo underline">Additional information</p>
       
      <p>Your stake is in one of the dance numbers that do not have a costume.</p>

      <p>The youth will be provided a T-shirt (that they keep) they will need to wear YOUR OWN Black pants or 
        skirt black shoes and socks. (if girls choose to wear a skirt they need opaque black tights so 
        everything from the waist down is black). NO FLIP FLOPS</p>

      <p>ALL The youth in these numbers will need to go to the Dee Event Center the morning of the 
        performance. If the can be there promptly at 8:00 a.m. for cast A and Cast B at 3:15 p.m. it will 
        make things go faster. At that time they will be given a t-shirt to wear  for the performance.</p>

     <p>There is no place for people to change clothes so girls please wear a cap sleeve shirt the morning of 
       the performance and you can put your t-shirt on over top of it.</p>
       
     <p>Boys wear a shirt with no collar that you can wear the t-shirt over top of as there will be no place 
       to put a shirt you take off.</p>
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
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr class="odd">
    <td>Syracuse Utah Bluff Stake</td>
    <td>Solar System</td>
    <td style="padding: 10px;">Girls &amp; Boys: You will be provided a T-shirt (YOU KEEP THESE) and you will need 
      <b>YOUR OWN</b> black skirt or pants, black shoes and socks. NO FLIP FLOPS. No leggings or tight 
      fitting pants.
      
      <p class="bold text_solo underline">Additional information</p>
      
      <p class="bold text_solo">*** CHANGE FROM ORIGINAL INFORMATION PASSED OUT ***</p>
      
      <p>If you were assigned to wear a costume at your last practice (you should know who you are) the 
        morning of the event please wear t-shirt and shorts and Black flat shoes, NO FLIP FLOPS. They will 
        put the costume on over top of their own clothes. There is no place for them to change or to put 
        their clothes if they did change.</p>

      <p>They will also get a t-shirt to wear (that they keep) over top of their costume while sitting in the 
        audience waiting for their time to go on stage.</p> 

      <p>The youth <b>WHO DO NOT HAVE A COSTUME</b> will be provided a T-shirt (that they keep) they will 
        need to wear THEIR OWN Black pants or skirt, black shoes and socks. (If girls choose to wear a skirt 
        xthey need opaque black tights so everything from the waist down is black). NO FLIP FLOPS</p>
    </td>
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
      
      <p class="bold text_solo underline">Additional Information</p>
      
      <p>The youth in this number who are the <b>&quot;Army of Helaman&quot;</b>, both boys and girls will be 
        given a costume the morning of the event as well as a t-shirt.</p>

      <p>When they come the morning of the event please have them wear t-shirt and shorts (color does not 
        matter) and neutral colored sandals NO FLIP FLOPS. They will put the costume on over top of their own 
        clothes. There is no place for them to change or to put their clothes if they did change.</p> 

      <p>They will also be provided a t-shirt to wear over their costume while sitting in the audience 
        waiting for their turn to go on stage.</p>

      <p>The <b>Missionary</b> can wear anything that a missionary would wear, we do not want them to look 
        all the same, the girls can go to the church web site to see approved sister missionary attire. The 
        boys need dress pants, white shirt and tie, anything missionary appropriate.</p>
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
      
      <p class="bold text_solo underline">Additional information about the Railroad number</p>
      <p>
        <span class="text_choir">Roy Utah Central Stake:</span> 12 girls and 15 boys will be given costumes to wear<br/>
        <span class="text_choir">Roy Utah Midland Stake:</span> 42 girls and 50 boys will be given costumes to wear<br/>
        <span class="text_choir">Roy Utah North Stake:</span> 2 girls and 2 boys will be given costumes to wear<br/>
        <span class="text_choir">Roy Utah Stake:</span> 14 girls and 22 boys will be given costumes to wear<br/>
        <span class="text_choir">Roy Utah West Stake:</span> 12 girls and 20 boys will be given costumes to wear<br/>
        <span class="text_choir">Roy Utah South Stake:</span> 18 girls and 22 boys will be given costumes to wear<br/>
        <span class="text_choir">West Point Utah Stake:</span> 30 girls will be given costumes to wear. The boys need to wear black pants, black shoes and socks. They will be given a t-shirt to wear for the performance. 

      </p>
      
      <p><span class="text_solo">BOYS: THE BOYS WHO GET A COSTUME FROM US WILL NEED TO</span> Please wear a 
        pair of knee length shorts and a t-shirt the day of the performance. That way you can put your 
        costume on over top of your shirt and shorts. PLEASE WEAR BLACK SHOES AND <span class="underline">
        WHITE SOCKS</span>!</p>    
                                                                                                                    
      <p><span class="text_solo">GIRLS: THE GIRLS WHO GET A COSTUME FROM US WILL NEED TO</span> Please wear a 
        pair of BLACK CAPRI PANTS if they have them, if not black pants and a cap sleeve t-shirt the day of 
        the performance. That way you can put your costume (a shirt) on over top of your cap sleeve t-shirt. 
        Please <span class="underline">WEAR WHITE KNEE LENGTH SOCKS</span> AND BLACK SHOES!</p>
                              
      <p class="blue_highlight">If you have more youth than the numbers listed above please have them wear 
        black pants, black shoes and socks. They will be given a t-shirt to wear for the performance.</p>

      <p>All of the youth will get a t-shirt to wear while sitting in the audience. They can put it on over 
        top of their costumes.</p>

      <p>Some cast members will be in the promontory/ Trapper costumes, your stake will decide who this will 
        be. We will have your costumes for you to try on, on SEPT 8th at 5:00 at the Stake Center just North 
        of the Dee Event Center.</p>

      <p>The address is:<br/>
        1401 Country Hills Drive<br/>
        Ogden Utah 84403</p>
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
      
      <p class="bold text_solo underline">Additional Information about the Mexican number</p>
      
      <p><b>The adult leaders</b> will need to make the assignments as to what girls get the dresses and what 
        girls need black pants and a long sleeved shirt <b>AHEAD OF TIME</b> so when they come the morning of 
        the event they will know what they need; and so the kids who need black pants will have them.</p>
        
      <p>The youth will be provided a t-shirt to wear over their costume while sitting in the audience 
        waiting for their turn to go on stage.</p>

      <p><b>118 GIRLS</b> from your stake will get Hispanic dresses to wear during the performance. When they 
        come the morning of the event please have them wear t-shirt and shorts (color does not matter) and 
        Black flat shoes, NO FLIP FLOPS. They will put the costume on over top of their own clothes. There is 
        no place for them to change or to put their clothes if they did change.</p> 

      <p>Any girls you have more than this will need to wear black pants, black shoes and socks &amp; a LONG 
        sleeved bright colored shirt that has a collar and buttons up the front OR a white long sleeved shirt 
        that has a collar and buttons up the front (Dress shirt). <b>!!!PLEASE DON&#39;T MAKE THEM BUY A NEW 
        SHIRT</b>, THEY CAN BORROW A BOYS SHIRT FROM A NEIGHBOR OR FRIEND OR GET ONE AT THE DI OR SAVERS IF 
        THEY DO NOT HAVE ONE!!! They will get a black vest, sash and bow tie to wear.</p>

      <p><b>BOYS:</b> will need to wear black pants, black shoes and socks &amp; a LONG sleeved bright 
        colored shirt that has a collar and buttons up the front OR a white long sleeved shirt that has a 
        collar and buttons up the front (Dress shirt). They will get a black vest, sash and bow tie to wear.</p>
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