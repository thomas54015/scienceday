<?php
session_start();


   function probone() {
       $servername = "localhost";
$username = "root";
$password = "pass123";
$dbname = "scienceday";

$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM students WHERE prob = '1'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $uname = $row['uname'];
            $school = $row['school'];
            echo '
            <br> <div style="width: 100%;">
            ' . $uname . '; ' . $school . '
            </div>
            ';
        }
        }
   }

   function probtwo() {
       $servername = "localhost";
$username = "root";
$password = "pass123";
$dbname = "scienceday";

$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM students WHERE prob = '2'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $uname = $row['uname'];
            $school = $row['school'];
            echo '
            <br> <div style="width: 100%;">
            ' . $uname . '; ' . $school . '
            </div>
            ';
        }
        }
   }

   function probthree() {
       $servername = "localhost";
$username = "root";
$password = "pass123";
$dbname = "scienceday";

$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM students WHERE prob = '3'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $uname = $row['uname'];
            $school = $row['school'];
            echo '
            <br> <div style="width: 100%;">
            ' . $uname . '; ' . $school . '
            </div>
            ';
        }
        }
   }

   function probfour() {
       $servername = "localhost";
$username = "root";
$password = "pass123";
$dbname = "scienceday";

$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM students WHERE prob = '4'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $uname = $row['uname'];
            $school = $row['school'];
            echo '
            <br> <div style="width: 100%;">
            ' . $uname . '; ' . $school . '
            </div>
            ';
        }
        }
   }

   function probfive() {
       $servername = "localhost";
$username = "root";
$password = "pass123";
$dbname = "scienceday";

$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM students WHERE prob = '5'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $uname = $row['uname'];
            $school = $row['school'];
            echo '
            <br> <div style="width: 100%;">
            ' . $uname . '; ' . $school . '
            </div>
            ';
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
    <div style="width: 100%; margin-top: 8px; color: #ff0000;">The winners are listed below!</div>


   <div class="probs" style="background-color: rgb(173, 194, 207);">

 <h2>Problem One:</h2>
    <?php
       probone();
       ?>

        </div>


      <div class="probs" style="background-color: rgb(153, 255, 43);">

<h2>Problem Two:</h2>


          <?php
       probtwo();
       ?>
        </div>

           <div class="probs" style="background-color: rgb(0, 255, 57);">

<h2>Problem Three:</h2>

               <?php
       probthree();
       ?>

        </div>

           <div class="probs" style="background-color: rgb(255, 167, 248);">

<h2>Problem Four:</h2>
<?php
       probfour();
       ?>

        </div>

           <div class="probs" style="background-color: rgb(199, 131, 255);">

<h2>Problem Five:</h2>

               <?php
       probfive();
       ?>

        </div>

    </div>
</body>

</html>
