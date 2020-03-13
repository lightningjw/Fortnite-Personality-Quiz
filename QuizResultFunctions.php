<?php
  function tallyUp ($results){
    $characterTallyArray = ["Default" => 0, "CuddleTeamLeader" => 0, "Raven" => 0, "JohnWick" => 0];
    foreach($results as $name => $value){
      foreach ($characterTallyArray as $character => $tallyNumber){
        if ($value == $character){
          $characterTallyArray[$character]++;
        }
      }
    }
    return $characterTallyArray;
  }

  function decideWhichSkin ($characterTallyArray){
    $theMatchingSkin = "Default";
    $highestTallyNumber = $characterTallyArray["Default"];
    foreach ($characterTallyArray as $character => $tallyNumber){
      if($highestTallyNumber < $tallyNumber){
        $theMatchingSkin = $character;
        $highestTallyNumber = $tallyNumber;
      }
    }
    return $theMatchingSkin;
  }

  function standardHeader(){
  	echo "<div id = 'parentheader'><header id = 'header'> <img id = 'ATDPlogo' src = 'https://pbs.twimg.com/profile_images/903011072235282432/2okYnYk2_400x400.jpg' alt = 'ATDP logo'> <h1 id = 'standardheader'> ATDP Corp. </h1> </header></div>";
  }
?>
