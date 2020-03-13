<!DOCTYPE html>

<html lang = "en">

<head>
 <title> Fortnite Skin Personality Quiz </title>
 <script
   src="https://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous">
 </script>
 <script src = "Quiz.js">
 </script>
 <link href = "QuizCss.css" type = "text/css" rel = "stylesheet" />
</head>

<body>
  <?php
    require_once "QuizResultFunctions.php";
    standardHeader();
   ?>
  <div id = "starting">
    <img id = "background" src = "https://image.winudf.com/v2/image/Y29tLnNraW5zZm9ydG5pdGV3YWxsX3NjcmVlbl8wXzE1MjE1NzA5NzVfMDk4/screen-0.jpg?h=355&fakeurl=1&type=.jpg" alt = "Fortnite Background Wallpaper"/>
    <h1> What Fortnite Skin are You? </h1>
    <h2> Take this 10 question quiz to find out! </h2>
    <p> <button id = "start"> Start </button> </p>
  </div>

<div>
  <span id = "skipButtons">
  <button type = "button" id = "personalDetailsSkip" class = "skip"> Personal Details </button>
  <button type = "button" id = "1Skip" class = "skip"> 1 </button>
  <button type = "button" id = "2Skip" class = "skip"> 2 </button>
  <button type = "button" id = "3Skip" class = "skip"> 3 </button>
  <button type = "button" id = "4Skip" class = "skip"> 4 </button>
  <button type = "button" id = "5Skip" class = "skip"> 5 </button>
  <button type = "button" id = "6Skip" class = "skip"> 6 </button>
  <button type = "button" id = "7Skip" class = "skip"> 7 </button>
  <button type = "button" id = "8Skip" class = "skip"> 8 </button>
  <button type = "button" id = "9Skip" class = "skip"> 9 </button>
  <button type = "button" id = "10Skip" class = "skip"> 10 </button>
  </span>


  <div id = "timer"> <span id = "time"> </span> </div>
  <form id = "fortniteForm" action = "QuizResults.php" method = "post">
    <fieldset id = "grouping">
    <div id = "details">
        <fieldset id = "personaldetails">
            <legend> Details </legend>
            <label> Name:
                <input type = "text" name = "name" pattern ="[A-Za-z]{1,}" required/>
            </label>
            <br />
            Sex:
                <input type = "radio" name = "sex" value = "male" checked required/> male
                <input type = "radio" name = "sex" value = "female" required/> female
                <input type = "radio" name = "sex" value = "other" required/> other
            <br />
            <label> Date of Birth:
                <input type = "date" name = "dayofbirth" required/>
            </label>
            <br />
            <label> Email Address:
              <input type = "email" name = "email" required/>
            </label>
            <br />
            <label> Street Address:
                <input type = "text" name = "address" pattern= "[0-9].*[A-Za-z]" placeholder="house # followed by street" required/>
            </label>
        </fieldset>
        <p> <button type = "button" id = "detail" class = "next"> Next </button> </p>
      </div>

      <img id = "questionspicture" src = "https://lh3.googleusercontent.com/1hDZrybf6r1olIWfc9G-lMeBFXnh-vvPllsrVWxO1ypKWkhhXDzUO74k_m0Qc-VG8ktFGaEZ=w640-h400-e365" alt = "Fortnite Wallpaper"/>

      <div id = "firstquestion" class = "question">
      <p> 1. How often do you play Fortnite? </p>
        <input type = "radio" name = "timeplayed" value = "JohnWick" checked required/> It is my life
        <br />
        <input type = "radio" name = "timeplayed" value = "Raven" required/> It is a hobby
        <br />
        <input type = "radio" name = "timeplayed" value = "CuddleTeamLeader" required/> When I'm bored
        <br />
        <input type = "radio" name = "timeplayed" value = "Default" required/> What is Fortnite?
        <p> <button type = "button" id = "1stquestion2" class = "back"> Back </button> <button type = "button" id = "1stquestion" class = "next"> Next </button> </p>
      </div>

      <div id = "secondquestion" class = "question">
      <p> 2. How many Fortnite wins do you have? </p>
        <input type = "number" name = "numWins" value = "0" min = "0"/>
        <p> <button type = "button" id = "2ndquestion2" class = "back"> Back </button> <button type = "button" id = "2ndquestion" class = "next"> Next </button> </p>
      </div>

      <div id = "thirdquestion" class = "question">
      <p> 3. Pick a weapon to use- </p>
        <table>
          <tr>
              <td> <label class = "picturebutton"> <input type = "radio" name = "weapon" value = "JohnWick" checked required/> <img src = "https://db.fortnitetracker.com/app/images/fortnite/weapons_v2/hand-cannon.png" id = "deagle" alt = "Picture of a Deagle (Hand Cannon)"/> </label> </td>
              <td> <label class = "picturebutton"> <input type = "radio" name = "weapon" value = "Default" required/> <img src = "https://d1u5p3l4wpay3k.cloudfront.net/fortnite_gamepedia/a/ae/Semi-auto_handgun_icon.png" id = "pistol" class = "resize" alt = "Picture of a Pistol"/> </label> </td>
          </tr>
          <tr>
              <td> <label class = "picturebutton"> <input type = "radio" name = "weapon" value = "Raven" required/> <img src = "https://ih0.redbubble.net/image.518400829.2014/pp,550x550.u2.jpg" id = "scar" class = "resize" alt = "Picture of a SCAR"/> </label> </td>
              <td> <label class = "picturebutton"> <input type = "radio" name = "weapon" value = "CuddleTeamLeader" required/> <img src = "https://d1u5p3l4wpay3k.cloudfront.net/fortnite_gamepedia/c/ce/Rocket_launcher_icon.png" id = "rpg" class = "resize" alt = "Picture of a Rocket Launcher"/> </label> </td>
          </tr>
        </table>
        <p> <button type = "button" id = "3rdquestion2" class = "back"> Back </button> <button type = "button" id = "3rdquestion" class = "next"> Next </button> </p>
      </div>

      <div id = "fourthquestion" class = "question">
      <p> 4. In a battle, what would you do? </p>
        <input type = "radio" name = "battlestrategy" value = "Raven" checked required/> Stealthily roam around and catch enemies off guard
        <br />
        <input type = "radio" name = "battlestrategy" value = "CuddleTeamLeader" required/> Try to befriend the enemy and later start a dance party
        <br />
        <input type = "radio" name = "battlestrategy" value = "JohnWick" required/> Build a gigantic base to scout for the enemies
        <br />
        <input type = "radio" name = "battlestrategy" value = "Default" required/> Hide in a bush and hope to not encounter a single enemy
        <p> <button type = "button" id = "4thquestion2" class = "back"> Back </button> <button type = "button" id = "4thquestion" class = "next"> Next </button> </p>
      </div>

      <div id = "fifthquestion" class = "question">
      <p> 5. How do you dress? </p>
        <input type = "radio" name = "fashion" value = "Default" checked required/> Like a hobo
        <br />
        <input type = "radio" name = "fashion" value = "Raven" required/> ALL black, like Batman
        <br />
        <input type = "radio" name = "fashion" value = "CuddleTeamLeader" required/> As if I am going to a glow in the dark, neon disco party
        <br />
        <input type = "radio" name = "fashion" value = "JohnWick" required/> Cool like a super star
        <p> <button type = "button" id = "5thquestion2" class = "back"> Back </button> <button type = "button" id = "5thquestion" class = "next"> Next </button> </p>
      </div>

      <div id = "sixthquestion" class = "question">
      <p> 6. What is your spirit animal? </p>
      <table>
        <tr>
            <td> <label class = "picturebutton"> <input type = "radio" name = "spiritanimal" value = "Raven" checked required/> <img src = "http://www.spiritanimal.info/pictures/panther/Panther-Spirit-Animal-4.jpg" id = "panther" class = "resize" alt = "Picture of a Black Panther"/> </label> </td>
            <td> <label class = "picturebutton"> <input type = "radio" name = "spiritanimal" value = "JohnWick" required/> <img src = "https://cdn.images.express.co.uk/img/dynamic/galleries/x701/67639.jpg" id = "lion" class = "resize" alt = "Picture of a Lion"/> </label> </td>
        </tr>
        <tr>
            <td> <label class = "picturebutton"> <input type = "radio" name = "spiritanimal" value = "CuddleTeamLeader" required/> <img src = "https://ae01.alicdn.com/kf/HTB1ubnDRXXXXXXfaFXXq6xXFXXX3/NEW-Hot-Sale-DIY-5D-Diamond-Painting-Mosaic-Unicorn-Diamond-Painting-Cross-Stitch-Rhinestones-Square-Decorative.jpg_640x640.jpg" id = "unicorn" class = "resize" alt = "Picture of a Unicorn"/> </label> </td>
            <td> <label class = "picturebutton"> <input type = "radio" name = "spiritanimal" value = "Default" required/> <img src = "https://i.pinimg.com/474x/f0/04/b4/f004b4259f8bec250bc8acf1dcad39a9--smiling-animals-funny-animals.jpg" id = "horse" class = "resize" alt = "Picture of a Derpy Horse"/> </label> </td>
        </tr>
      </table>
      <p> <button type = "button" id = "6thquestion2" class = "back"> Back </button> <button type = "button" id = "6thquestion" class = "next"> Next </button> </p>
    </div>

    <div id = "seventhquestion" class = "question">
      <p> 7. What is your favorite color? </p>
        <input type = "radio" name = "favcolor" value = "CuddleTeamLeader" checked required/> Eye-blinding neon pink
        <br />
        <input type = "radio" name = "favcolor" value = "Raven" required/> Night black
        <br />
        <input type = "radio" name = "favcolor" value = "Default" required/> Poo brown
        <br />
        <input type = "radio" name = "favcolor" value = "JohnWick" required/> I'm too cool to have a favorite color
        <p> <button type = "button" id = "7thquestion2" class = "back"> Back </button> <button type = "button" id = "7thquestion" class = "next"> Next </button> </p>
    </div>

    <div id = "eighthquestion" class = "question">
      <p> 8. What best describes your attitude towards school- </p>
        <input type = "radio" name = "schoolattitude" value = "CuddleTeamLeader" checked required/> LOVE IT
        <br />
        <input type = "radio" name = "schoolattitude" value = "JohnWick" required/> Too cool for it
        <br />
        <input type = "radio" name = "schoolattitude" value = "Raven" required/> Will just go through the motions
        <br />
        <input type = "radio" name = "schoolattitude" value = "Default" required/> What is school?
        <p> <button type = "button" id = "8thquestion2" class = "back"> Back </button> <button type = "button" id = "8thquestion" class = "next"> Next </button> </p>
    </div>

    <div id = "ninthquestion" class = "question">
      <p> 9. In a friend group, who are you- </p>
        <input type = "radio" name = "friendrole" value = "JohnWick" checked required/> The trend setter
        <br />
        <input type = "radio" name = "friendrole" value = "CuddleTeamLeader" required/> The life of the party
        <br />
        <input type = "radio" name = "friendrole" value = "Default" required/> The sacrifice
        <br />
        <input type = "radio" name = "friendrole" value = "Raven" required/> The quiet and most mature one
        <p> <button type = "button" id = "9thquestion2" class = "back"> Back </button> <button type = "button" id = "9thquestion" class = "next"> Next </button> </p>
    </div>

    <div id = "tenthquestion" class = "question">
      <p> 10. Someone bullies your friend. What do you do? </p>
        <input type = "radio" name = "revenge" value = "JohnWick" checked required/> Go on an angry rampage until you find this person and unleash vengenace to show them who not to mess with
        <br />
        <input type = "radio" name = "revenge" value = "CuddleTeamLeader" required/> Try to understand each side and mend ties, while ultimately forgiving the person
        <br />
        <input type = "radio" name = "revenge" value = "Default" required/> Steer far away from the drama and avoid getting involved
        <br />
        <input type = "radio" name = "revenge" value = "Raven" required/> Friends? Don't have any
        <p> <button type = "button" id = "10thquestion2" class = "back"> Back </button>  </p>
        <p> <input type = "submit" value = "Find out which Fortnite skin you are" /> </p>
    </div>
  </fieldset>
  </form>
</div>

<div class="footer">
  <a id = "validation" href = "https://atdpsites.berkeley.edu/validate/"> Validation </a>
</div>
</body>

</html>
