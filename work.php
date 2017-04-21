<?php
session_start();


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



            <div class="probs" style="background-color: #ade7f9; " >
                <div>
                    <h3>How Does it Work?</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">There are a total of 5 languages to get this basic setup up, and running!</div>

                <div>
                    <h3>HTML</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">
                Which stands for: Hyper Text Markup Language. This is the basic framework for which one sees when they come to this site. </div>

                <div>
                    <h3>CSS</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">
                If HTML is the brick wall that the house is built on, the CSS would be the paint, and decoration. CSS allows for layouts, and html tag manipulation.
                </div>

                <div>
                    <h3>PHP</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">
                This is call a server-side language. This decides what all needs to be sent back to the user. Things link logins, Cookies, and almost anything else that is used with data can be done using this language.
                </div>

                <div>
                    <h3>MySQL</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">
               Is a language that calls on the database. This puts information in, and takes information back out. You can record just about anything, and is esily used to manipulate data as needed.</div>

                <div>
                    <h3>Shell Script</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">
                    This is what turns on the light when the user gives the correct answer. This is a scripting language that directly interacts with the OS of the system. It runs commands just like if they were to be run in a Terminal.
                </div>

                <div>
                    <h3>So How does it tie together?</h3>
                </div>
                <div style="text-align: left; padding-top: 5px; padding-bottom: 5px; width: 90%; padding-left: 5%;">
                    Basically what happens, the index page always loads first in your browser. When it asks for your name, and school, the php will check the data and make sure its valid. At this point the data is stored as Sessions on your browser, and you are forwarded to the students.php page. On here the html loads up the framework and questions. The CSS is what gives all the colors in this situation. This is the most common way of doing this currently; however, several years ago, one could have used straight HTMl for the color. This made for pretty bad looking websites. Anyhow, once the check button is click it loads the php, which is actually in the same file. It states that if you give the right answer to record ones name, and school into the database, turn on the light, using a shell script, if the first user, and state that one had the right answer. If not, keep the answer in the input, and alert the user of the incorrect answer. The winners page uses php to pull the data out of the server, and project it on the page for anyone on the local server to see.
                </div>


            </div>


    </div>
</body>

</html>
