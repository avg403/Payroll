<html>
<head>
    <title>
        RECORD DELETED
    </title>
    <style>
    p {
        color: white;
        font-family: courier;
        text-align: center;
        text-decoration: underline;
        font-size: 300%;
        }
        
        h3{color: 	#FFFF99;
        font-size:150%;
        font-family: courier;

        }
    </style>
    <link rel="stylesheet" href="style2.css">
</head>
<body bgcolor="	#330033" >
    <p>EMPLOYEE DELETED</p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EMPLOYEE";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$empid1= $_GET["id1"];

$sql1 ="DELETE FROM PAYROLL WHERE EMPID=$empid1";

if ($conn->query($sql1) === TRUE) {
  echo " <h3>Employee of EMP ID $empid1 has been successfully deleted.<br>Click the below button to return home<h3>";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?> 

<center>
    <button onclick="window.location.href='index.php';" class="button4">  <b>HOME<b></button> 
    </center>
</body>
</html>