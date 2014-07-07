<?php
// Utility routines for MySQL.

// Connect to the database
/*function DBconnect() {
  global $mysql;
  $mysql = mysql_pconnect('localhost', 'shinethelight', 'ogden@Temple2014');
  mysql_select_db('shinethelight');
}*/

function getStakes() {
  $stakes = json_decode(file_get_contents("https://leaders.shinethelightogden.com/api/stakes/"));
  return $stakes;
}

function getCouncils() {
  $councils = json_decode(file_get_contents('https://leaders.shinethelightogden.com/api/councils/'));
  return $councils;
}

// Validate Stake
function isValidStake($stakeStr) {
  /*
  //Connect to the database
  DBconnect();
  
  $query = "SELECT name FROM stake WHERE name = '". addslashes($stakeStr) ."' LIMIT 1;";
  $result = mysql_query($query);
  $valid = (mysql_num_rows($result) == 1);
  mysql_free_result($result);
  return ($valid);
  */
  $stakes = getStakes();
  
  foreach ($stakes as $stake) {
    if($stake->name == $stakeStr) {
      return true;
    }
  }
  return false;
}

function getCouncil($stakeStr) {
  if($stakeStr == 'ADMIN') {
    return 'ADMIN';
  }
  
  /*
  //Connect to the database
  DBconnect();
  
  $query = "SELECT c.name FROM council c JOIN stake s on c.name = s.council WHERE s.name = '". addslashes($stakeStr) ."' LIMIT 1;";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);
  mysql_free_result($result);
  return $row['name'];
  */
  $stakes = getStakes();
  
  foreach ($stakes as $stake) {
    if($stake->name == $stakeStr) {
      return $stake->council;
    }
  }
  return NULL;
}

function getCouncilDropDown($councilStr) {
  echo "<select name=\"council\" onchange=\"this.form.submit()\">\n";
  
  /*
  //Connect to the database
  DBconnect();
  
  $query = "SELECT name FROM council ORDER BY name;";
  $result = mysql_query($query);
  
  while ($row = mysql_fetch_array($result)) {
    echo "<option value=\"".$row['name']."\"";
    if($row['name'] == $councilStr) {
      echo " selected=\"selected\"";
    }  
    echo ">".$row['name']."</option>\n";
  }
  mysql_free_result($result);
  
  echo "</select>\n";
  return;
  */
  
  $councils = getCouncils();
  foreach ($councils as $council) {
    echo "<option value=\"".$council->name."\"";
    if($council->name == $councilStr) {
      echo " selected=\"selected\"";
    }  
    echo ">".$council->name."</option>\n";
  }
  
  echo "</select>\n";
  return;
}

function getCast($councilStr) {
  switch ($councilStr) {
    case 'Ogden South':
    case 'Weber East':
    case 'Weber West':
    case 'Southwest Wyoming':
      $cast = 'A - 1:00pm Performance';
      break;
    
    case 'Layton':
    case 'Ogden North':
    case 'Ogden West':
      $cast = 'B - 7:00pm Performance';
      break;
    
    case 'ADMIN':
      $cast = 'ADMIN';
      break;
  }
  return $cast;
}
?>