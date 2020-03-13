<!DOCTYPE html>

<html lang = "en">
<head>
  <title> Quiz Results </title>
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
  </script>
    <script src = "QuizResults.js">
  </script>
  <link href = "QuizCss.css" type = "text/css" rel = "stylesheet" />
</head>
<body>
    <?php
    require_once "QuizResultFunctions.php";
    standardHeader();
    $sexes = array("male", "female", "other");
    function validateDate($date, $format = 'Y-m-d'){
      $d = DateTime::createFromFormat($format, $date);
      return $d && $d->format($format) === $date;
    }
    $characterValues = array("JohnWick", "Raven", "CuddleTeamLeader", "Default");

    if (isset($_POST["name"]) === false || ctype_alpha($_POST["name"]) !== true){
      echo "<p class = 'invalidmessage'> Please input a valid name. </p>";
    }
    elseif (isset($_POST["sex"]) === false || !in_array($_POST["sex"], $sexes)) {
        echo "<p class = 'invalidmessage'> Please select one of the genders provided. </p>";
    }
    elseif (validateDate($_POST["dayofbirth"]) === false){
      echo "<p class = 'invalidmessage'> Please input a valid birthday. </p>";
    }
    elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
      echo "<p class = 'invalidmessage'> Please input a valid email. </p>";
    }
    elseif (!preg_match('/[0-9].*[A-Za-z]/', $_POST["address"])) {
      echo "<p class = 'invalidmessage'> Please input a valid street address, with the house number first and then the street name. </p>";
    }
    elseif (isset($_POST["timeplayed"]) === false || !in_array($_POST["timeplayed"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 1. </p>";
    }
    elseif (filter_var($_POST["numWins"], FILTER_VALIDATE_INT) === false || $_POST["numWins"] < 0){
      echo "<p class = 'invalidmessage'> Please have a positive integer in question 2. </p>";
    }
    elseif (isset($_POST["weapon"]) === false || !in_array($_POST["weapon"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 3. </p>";
    }
    elseif (isset($_POST["battlestrategy"]) === false || !in_array($_POST["battlestrategy"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 4. </p>";
    }
    elseif (isset($_POST["fashion"]) === false || !in_array($_POST["fashion"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 5. </p>";
    }
    elseif (isset($_POST["spiritanimal"]) === false || !in_array($_POST["spiritanimal"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 6. </p>";
    }
    elseif (isset($_POST["favcolor"]) === false || !in_array($_POST["favcolor"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 7. </p>";
    }
    elseif (isset($_POST["schoolattitude"]) === false || !in_array($_POST["schoolattitude"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 8. </p>";
    }
    elseif (isset($_POST["friendrole"]) === false || !in_array($_POST["friendrole"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 9. </p>";
    }
    elseif (isset($_POST["revenge"]) === false || !in_array($_POST["revenge"], $characterValues)) {
        echo "<p class = 'invalidmessage'> Please select one of the options provided on question 10. </p>";
    }
    else{
    if ($_POST["numWins"] <= 0){
      $_POST["numWins"] = "Default";
    }
    elseif ($_POST["numWins"] <= 20){
      $_POST["numWins"] = "CuddleTeamLeader";
    }
    elseif ($_POST["numWins"] <= 50){
      $_POST["numWins"] = "Raven";
    }
    else{
      $_POST["numWins"] = "JohnWick";
    }

    $fortniteSkinQuestionsArray = $_POST;
    unset($fortniteSkinQuestionsArray["name"]);
    unset($fortniteSkinQuestionsArray["sex"]);
    unset($fortniteSkinQuestionsArray["dayofbirth"]);
    unset($fortniteSkinQuestionsArray["email"]);
    unset($fortniteSkinQuestionsArray["address"]);
    unset($fortniteSkinQuestionsArray["submit"]);

    $skin = decideWhichSkin(tallyUp($fortniteSkinQuestionsArray));

    $birthday = new DateTime(htmlspecialchars($_POST["dayofbirth"]));
    $now = new DateTime();
    $difference = $now->diff($birthday);
    $age = $difference->y;

    if ($skin == "Default"){
      echo "<img src = 'https://d2g8igdw686xgo.cloudfront.net/28927058_15230648880_r.jpeg' class = 'finalResultImage' alt = 'Picture of Default'/>";
      echo "<h1 class = 'finalResultCharacter'> Default Skin </h1>";
      echo "<p class = 'finalResultDescription'>";
      echo "Hey, ";
      echo htmlspecialchars($_POST["name"]);
      if (htmlspecialchars($_POST["sex"]) == "male" || htmlspecialchars($_POST["sex"]) == "female"){
        echo "! You identify as a ";
        echo htmlspecialchars($_POST["sex"]);
        echo ". ";
      }
      if (htmlspecialchars($_POST["sex"]) === "other"){
        echo "! You identify as another gender different from male and female. ";
      }
      echo "Based upon your birthday (";
      echo htmlspecialchars($_POST["dayofbirth"]);
      echo "), you are ";
      echo $age;
      echo " years old";
      echo ". Your email address is ";
      echo htmlspecialchars($_POST["email"]);
      echo ". And finally, you live on ";
      echo htmlspecialchars($_POST["address"]);
      echo ". Based upon the survey, you are the biggest noob! Because you are a pleb, you are a huge target to others for them to take advantage of you. Stop trolling, and maybe you can become more loved.";
      echo "</p>";
    }
    if ($skin == "CuddleTeamLeader"){
      echo "<img src = 'https://progameguides.com/wp-content/uploads/2018/05/fortnite-1920x1080-wallpaper-cuddle-team-leader.jpg' class = 'finalResultImage resize' alt = 'Picture of Cuddle Team Leader' />";
      echo "<h1 class = 'finalResultCharacter'> Cuddle Team Leader </h1>";
      echo "<p class = 'finalResultDescription'>";
      echo "Hey, ";
      echo htmlspecialchars($_POST["name"]);
      if (htmlspecialchars($_POST["sex"]) === "male" || htmlspecialchars($_POST["sex"]) === "female"){
        echo "! You identify as a ";
        echo htmlspecialchars($_POST["sex"]);
        echo ". ";
      }
      if (htmlspecialchars($_POST["sex"]) === "other"){
        echo "! You identify as another gender different from male and female. ";
      }
      echo "Based upon your birthday (";
      echo htmlspecialchars($_POST["dayofbirth"]);
      echo "), you are ";
      echo $age;
      echo " years old";
      echo ". Your email address is ";
      echo htmlspecialchars($_POST["email"]);
      echo ". And finally, you live on ";
      echo htmlspecialchars($_POST["address"]);
      echo ". Based upon the survey, you are one of the nicest people. You give off a friendly and likeable personality to everyone. Additionally, your silliness is appreciated.";
      echo "</p>";

    }
    if ($skin == "Raven"){
      echo "<img src = 'https://i.redd.it/u10kct9120r01.jpg' class = 'finalResultImage resize' alt = 'Picture of Raven'/>";
      echo "<h1 class = 'finalResultCharacter'> Raven </h1>";
      echo "<p class = 'finalResultDescription'>";
      echo "Hey, ";
      echo htmlspecialchars($_POST["name"]);
      if (htmlspecialchars($_POST["sex"]) === "male" || htmlspecialchars($_POST["sex"]) === "female"){
        echo "! You identify as a ";
        echo htmlspecialchars($_POST["sex"]);
        echo ". ";
      }
      if (htmlspecialchars($_POST["sex"]) === "other"){
        echo "! You identify as another gender different from male and female. ";
      }
      echo "Based upon your birthday (";
      echo htmlspecialchars($_POST["dayofbirth"]);
      echo "), you are ";
      echo $age;
      echo " years old";
      echo ". Your email address is ";
      echo htmlspecialchars($_POST["email"]);
      echo ". And finally, you live on ";
      echo htmlspecialchars($_POST["address"]);
      echo ". Based upon the survey, you are a mysterious and very intricate being. You seem to be very introverted and shy. But, you are also very strategic, which can prove deadly in combat.";
      echo "</p>";

    }
    if ($skin == "JohnWick"){
      echo "<img src = 'https://i.imgur.com/xG3CQ1x.png' class = 'finalResultImage resize' alt = 'Picture of John Wick'/>";
      echo "<h1 class = 'finalResultCharacter'> John Wick </h1>";
      echo "<p class = 'finalResultDescription'>";
      echo "Hey, ";
      echo htmlspecialchars($_POST["name"]);
      if (htmlspecialchars($_POST["sex"]) === "male" || htmlspecialchars($_POST["sex"]) === "female"){
        echo "! You identify as a ";
        echo htmlspecialchars($_POST["sex"]);
        echo ". ";
      }
      if (htmlspecialchars($_POST["sex"]) === "other"){
        echo "! You identify as another gender different from male and female. ";
      }
      echo "Based upon your birthday (";
      echo htmlspecialchars($_POST["dayofbirth"]);
      echo "), you are ";
      echo $age;
      echo " years old";
      echo ". Your email address is ";
      echo htmlspecialchars($_POST["email"]);
      echo ". And finally, you live on ";
      echo htmlspecialchars($_POST["address"]);
      echo ". Based upon the survey, you are one of the coolest kids in town! You are intimidating and feared by others. You prefer to be a lone alpha wolf, who likes taking care of business by yourself.";
      echo "</p>";
    }
  }
  echo "<button type = 'button' id = 'tryAgain'> Try Again </button>";
  ?>
</body>
</html>
