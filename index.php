<?php
session_start();
if (isset($_SESSION['uname']) && isset($_SESSION['school'])) {
    Redirect('student.php', false);
}

$uname = $school = "";
$Err = "";
$formcheck = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     if (empty($_POST["uname"])) {
    $Err = "Your name is required";
      $formcheck = 1;
  } else {
    $uname = test_input($_POST["uname"]);

  }

   if (empty($_POST["school"])) {
    $Err = "School name is required";
      $formcheck = 1;
  } else {
    $school = test_input($_POST["school"]);

  }

if ($formcheck == 0){
    $_SESSION["uname"] = $uname;
    $_SESSION["school"] = $school;
    Redirect('student.php', false);
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
    </style>
</head>
<body>
    <div Class="banner"><h2>Science Day</h2></div>
    <div class="main">
    <div style="width: 100%; margin-top: 8px; color: #ff0000;">*Welcome to Science Day!!! We only ask for when we put you on the screen for solving the puzzles. First one lights up the LED, and the remaining get added to the winners board.</div>
        <form action="<?php htmlspecialchars($_SERVER[" PHP_SELF "]) ?>"  enctype="multipart/form-data" method="post">

            <div class="probs" style="background-color: #ade7f9;">

    <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">Your Name?</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="uname" value="<?php echo $uname; ?>" />
        </div>
        <div style="width: 100%; margin-top: 5px; font-size: 1.2em; color: #000000;">Schools Name?</div>
     <div style="width: 100%; margin-top: 5px; color: #000000;"><input type="text" name="school" value="<?php echo $school; ?>" />
        </div>
        <div style="width: 100%; margin-top: 3px; color: #000000;"><input class="sub" type="submit" value="Next" />
        </div>
               <div style="color: #ff0000;"><?php echo $Err; ?></div>
            </div>

        </form>

    </div>
</body>

</html>
