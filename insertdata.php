<html>

<head>
    <title>
        DATA ADDD
    </title>
    <link rel="stylesheet" href="style2.css">
</head>

<body style="background-color:#2d5a8e">
  
    <center><h1 style='color:rgb(184, 197, 205); font-size: 40px;'><u><b>NEW EMPLOYEE</b></u></h1></center>
    <br>
    <table class="table1">
    <tr>
    <td><p class="para1">NAME<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["fname"]; ?>
    </p>
    <br><br></td>
    </tr>
    <tr>
    <td><p class="para1">AGE<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["age"];?>
    </p>
    <br><br></td>
    </tr>
    <tr>
    <td><p class="para1">DOB<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["dob"];?>
    </p>
    <br><br</td>
    </tr>
    <tr>
    <td><p class="para1">SEX<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["sex"];?>
    </p>
    <br><br></td>
    </tr>
    <tr>
    <td><p class="para1">BLOOD GRP <br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["blood"];?>
    </p>
    <br><br></td>
    </tr>
    <tr>
    <td><p class="para1">MOBILE NO<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["phone"];?>
    </p>
    <br><br></td>
    </tr>
    <tr>
    <td><p class="para1">DESIGNATION<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["desig"];?>
    </p>
    <br><br></td>
    </tr>
    <tr>
    <td><p class="para1">SALARY<br></p><br><br></td> 
    <td>
    <p class="para2">
    <?php echo ":&nbsp;&nbsp;";echo $_POST["sal"];?>
    </p>
    <br><br></td>
    </tr>
    </table>    

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EMPLOYEE";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql="SELECT MAX(EMPID) FROM PAYROLL";
    $result=$conn->query($sql);
    $row=mysqli_fetch_array( $result );
    $maxid=$row['MAX(EMPID)'];

    $id=$maxid+1;
    $name = $_POST["fname"];
    $age = $_POST["age"];
    $dob = $_POST["dob"];
    $sex = $_POST["sex"];
    $blood = $_POST["blood"];
    $phone = $_POST["phone"];
    $desig = $_POST["desig"];
    $sal=$_POST["sal"];


    $query = $conn->prepare('INSERT INTO PAYROLL(EMPID,NAME,AGE,DOB,GENDER,BLOOD_GRP,PHONE,DESIGNATION,SALARY)
        VALUES (?,?,?,?,?,?,?,?,?);');

    $query->bind_param('isisssssi',$id,$name,$age,$dob,$sex,$blood,$phone,$desig,$sal);

    $query->execute();
    echo " ";
    mysqli_close($conn);
    ?>
    <center>
    <button onclick="window.location.href='index.php';" class="btn button3"> HOME</button> 
    </center>   

</body>

</html>