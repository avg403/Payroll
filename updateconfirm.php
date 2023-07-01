<html>

<head>
  <title>
    RECORD UPDATED
  </title>
  <style>
    h3 {
      color: #FFFF99;
      font-size: 150%;
      font-family: courier;

    }
  </style>
  <link rel="stylesheet" href="style2.css">

</head>

<body bgcolor="#280000">
  <p class="para3">DETAILS UPDATED</p>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "EMPLOYEE";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $id3 = $_POST["empid3"];
  $name = $_POST["fname3"];
  $age = $_POST["age3"];
  $dob = $_POST["dob3"];
  $sex = $_POST["sex3"];
  $blood = $_POST["blood3"];
  $phone = $_POST["phone3"];
  $desig = $_POST["desig3"];
  $sal = $_POST["sal3"];





  $sql = "UPDATE PAYROLL SET 
NAME='$name',
AGE=$age,
DOB='$dob',
GENDER='$sex',
BLOOD_GRP='$blood',
PHONE='$phone',
DESIGNATION='$desig',
SALARY=$sal 
WHERE EMPID=$id3";

  if ($conn->query($sql) === TRUE) {
    echo " <h3>THE DATA HAS BEEN UPDATED SUCEESSFULLY<br>CLICK THE BELOW BUTTON TO RETURN HOME.<h3><br><br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>

  <center>
    <button onclick="window.location.href='index.php'; " class="button5"> HOME</button>
  </center>
</body>

</html>