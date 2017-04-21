<?php
session_start();
$uname = $_SESSION['uname'];
$school = $_SESSION['school'];

if (!isset($_SESSION['uname']) || !isset($_SESSION['school'])) {
    Redirect('index.php', false);
}

$probone = $probtwo = $probthree = $probfour = $probfive = "";
$checkone = $checktwo = $checkthree = $checkfour = $checkfive = "";

$servername = "localhost";
$username = "root";
$password = "pass123";
$dbname = "scienceday";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (isset($_POST["probone"])) {
          $probone = test_input($_POST["probone"]);

          if ($probone == 5){
              $checkone = "Your Answered Correctly!";
              $sql = "INSERT INTO students (uname, school, prob)
VALUES ('$uname', '$school', 1)";

if ($conn->query($sql) === TRUE) {
    $_SESSION["solvedone"] = 1;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

          }elseif ($probone == ""){
              $checkone = "";
          }else{
              $checkone = "You Answerd Incorrectly!";
          }
  }

    if (isset($_POST["probtwo"])) {
          $probtwo = test_input($_POST["probtwo"]);
          $probtwo = strtolower($probtwo);
          if ($probtwo == "i am the winner"){
              $checktwo = "Your Answered Correctly!";
              $sql = "INSERT INTO students (uname, school, prob)
VALUES ('$uname', '$school', 2)";

if ($conn->query($sql) === TRUE) {
    $_SESSION["solvedtwo"] = 1;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

          }elseif ($probtwo == ""){
              $checktwo = "";
          }else{
              $checktwo = "You Answerd Incorrectly!";
          }
  }

    if (isset($_POST["probthree"])) {
          $probthree = test_input($_POST["probthree"]);

          if ($probthree == 10){
              $checkthree = "Your Answered Correctly!";
              $sql = "INSERT INTO students (uname, school, prob)
VALUES ('$uname', '$school', 3)";

if ($conn->query($sql) === TRUE) {
    $_SESSION["solvedthree"] = 1;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


          }elseif ($probthree == ""){
              $checkthree = "";
          }else{
              $checkthree = "You Answerd Incorrectly!";
          }
  }

    if (isset($_POST["probfour"])) {
          $probfour = test_input($_POST["probfour"]);

          if ($probfour == 20 && $probfour != ""){
              $checkfour = "Your Answered Correctly!";

              $sql = "INSERT INTO students (uname, school, prob)
VALUES ('$uname', '$school', 4)";

if ($conn->query($sql) === TRUE) {
    $_SESSION["solvedfour"] = 1;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

          }elseif ($probfour == ""){
              $checkfour = "";
          }else{
              $checkfour = "You Answerd Incorrectly!";
          }
  }

    if (isset($_POST["probfive"])) {
          $probfive = test_input($_POST["probfive"]);

          if ($probfive == 24 && $probfive != ""){
              $checkfive = "Your Answered Correctly!";

              $sql = "INSERT INTO students (uname, school, prob)
VALUES ('$uname', '$school', 5)";

if ($conn->query($sql) === TRUE) {
    $_SESSION["solvedfive"] = 1;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

          }elseif ($probfive == ""){
              $checkfive = "";
          }else{
              $checkfive = "You Answerd Incorrectly!";
          }
  }

}

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

            function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head>
    <title>Science Day!</title>
    <style type="text/css">
        body, div {
            margin: 0px;
            padding: 0px;
            position: relative;
            width: 100%;
            display: block;
            float: left;
        }

        .banner {
            Width: 97%;
            margin: 3px 1.5%;
            font-size: 1em;
            text-align: center;
            background-color: #ade7f9;
            border-radius: 8px;
            border-width: 1px;
            border-style: solid;
            border-color: #333333;
        }

        .main {
             Width: 97%;
            margin: 2px 1.5%;
            font-size: .8em;
            text-align: center;


        }

        .probs {
           border-radius: 8px;
            border-width: 1px;
            border-style: solid;
            border-color: #333333;
            margin-top: 5px;
        }
        .sub {
            margin-bottom: 2px;
        }

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
        }

li a:hover {
    background-color: #111;
}
    </style>
</head>
<body>
    <div Class="banner"><h2>Science Day</h2>
    <div style="width: 100%;">
        <ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="win.php">Winners</a></li>
  <li><a href="work.php">How?</a></li>

</ul>
        </div>
    </div>
    <div class="main">
    <div style="width: 100%; margin-top: 8px; color: #ff0000;">*You must solve the problem to light up the corrosponding LED. First one to answer correctly is the one who lights it up. Everyone else will get their name added to the screen.</div>
        <form action="<?php htmlspecialchars($_SERVER[" PHP_SELF "]) ?>"  enctype="multipart/form-data" method="post">


   <div class="probs" style="background-color: rgb(173, 194, 207);">
       <?php
    if ($_SESSION["solvedone"] == 1) {
        echo '<h2>1. Solved!</h2>';
    }else{

        echo'
    <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">1. 1+1+1+1+1-1x0=?</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="probone" value="' . $probone . '" />
        </div>
        <div style="width: 100%; margin-top: 3px; color: #000000;"><input class="sub" type="submit" value="Check" />
        </div>
       <div style="color: #ff0000;">' . $checkone . '</div>';
        }
        ?>
        </div>


      <div class="probs" style="background-color: rgb(153, 255, 43);">
          <?php
    if ($_SESSION["solvedtwo"] == 1) {
        echo '<h2>2. Solved!</h2>';
    }else{

        echo'
    <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">2. S bw qlg fsyygj</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="probtwo" value="' . $probtwo . '" />
        </div>
        <div style="width: 100%; margin-top: 3px; color: #000000;"><input class="sub" type="submit" value="Check" />
        </div>
          <div style="color: #ff0000;">' . $checktwo . '</div>';}
          ?>
        </div>

           <div class="probs" style="background-color: rgb(0, 255, 57);">
               <?php
    if ($_SESSION["solvedthree"] == 1) {
        echo '<h2>3. Solved!</h2>';
    }else{

        echo'
    <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">3. 5+5=?</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="probthree" value="' . $probthree . '" />
        </div>
        <div style="width: 100%; margin-top: 3px; color: #000000;"><input class="sub" type="submit" value="Check" />
        </div>
               <div style="color: #ff0000;">' . $checkthree . '</div>';}
               ?>
        </div>

           <div class="probs" style="background-color: rgb(255, 167, 248);">
               <?php
    if ($_SESSION["solvedfour"] == 1) {
        echo '<h2>4. Solved!</h2>';
    }else{

        echo'
    <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">4. 10+10=?</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="probfour" value="' . $probfour . '" />
        </div>
        <div style="width: 100%; margin-top: 3px; color: #000000;"><input class="sub" type="submit" value="Check" />
        </div>
               <div style="color: #ff0000;">' . $checkfour . '</div>';}
               ?>
        </div>

           <div class="probs" style="background-color: rgb(199, 131, 255);">
               <?php
    if ($_SESSION["solvedfive"] == 1) {
        echo '<h2>5. Solved!</h2>';
    }else{

        echo'
    <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">5. 12+12=?</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="probfive" value="' . $probfive . '" />
        </div>
        <div style="width: 100%; margin-top: 3px; color: #000000;"><input class="sub" type="submit" value="Check" />
        </div>
               <div style="color: #ff0000;">' . $checkfive . '</div>';}
               ?>
        </div>
        </form>

    </div>
</body>

</html>
