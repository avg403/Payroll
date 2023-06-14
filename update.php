<html>
<head>
    <title>
        UPDATING
    </title>
</head>
<style>
    body{
      background-color: black;
    }
    p{
      color: aqua;
      font-weight: 200;
      font-size: 20px;
      text-decoration: solid;
    }
    h1{color: lime;
      font-weight: 1000;
      font-size: 35px;
      text-decoration: solid;
      text-align: center;
    }

    h3{
      color: #a8c995;
      font-weight: 500;
      font-size: 16px;
    }
    h4
    {color: #e2597e;
      font-weight: 5px;
      font-size: 12px;
    text-decoration: wavy;}
  </style>
<link rel="stylesheet" href="style4.css">
<body  >
    <h1><u>UPDATE EMPLOYEE</u></h1>
    <br>
    <h3>
    [PLEASE FILL ALL THE COLUMNS AND CHECK YOU HAVE FILLED NAME,GENDER AND BLOOD GROUP AGAIN]<br>
  </h3>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EMPLOYEE";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//STORING CURRENT VALUES TO VARIABLE 

$empid2= $_GET["id2"];

$sql="SELECT*FROM PAYROLL where EMPID=$empid2";
$result= $conn->query($sql);

if($result->num_rows>0) {
        while($row = $result->fetch_assoc()) {
            $name1 = $row["NAME"];
            $age1 = $row["AGE"];
            $dob1 = $row["DOB"];
            $sex1 = $row["GENDER"];
            $blood1 = $row["BLOOD_GRP"];
            $phone1 = $row["PHONE"];
            $desig1 = $row["DESIGNATION"];
            $sal1= $row["SALARY"];
        }
    } else {
        echo "0 result";
    }
    echo"</table>";
    ?>

    <!--DISPLAYING CURRENT DATA IN FROM-->

    <form action="updateconfirm.php" method="post" autocomplete="off">
      <table>
      <tr>
          <td><p>EMP ID:<br><br></p></td>
          <td><input type="text"    name="empid3" value=<?php echo $empid2 ?>  readonly="readonly"> <br><br></td>
        </tr>
        <tr>
          <td ><p>NAME: &emsp;&emsp;&emsp; <br><br> </p></td>       

          <td><input type="text"    name="fname3" value="<?php echo htmlspecialchars($name1) ?>" ></input> <br><br></td>
        </tr>
        <tr>
          <td><p>AGE :<br><br></p></td>       
          <td><input type="number"  name="age3" value=<?php echo $age1 ?> ><br><br></td>
        </tr>
        <tr>
          <td><p>DOB :<br><br></p></td>       
          <td><input type="date"    name="dob3" value=<?php echo $dob1 ?> ><br><br></td>
        </tr>
        <tr>
          <td><p>GENDER:   <br><br></p></td> 
          <td style="color: #ffff;">
          <?php
          if($sex1=="MALE")
          {?>
          
          <input type="radio"   name="sex3"     value="MALE" checked="checked">     MALE     &emsp;
          <input type="radio"   name="sex3"     value="FEMALE">   FEMALE   &emsp;
          <input type="radio"   name="sex3"     value="OTHER">    OTHERS   &emsp;
          <?php } 

          else if($sex1=="FEMALE")
          {?>
          
          <input type="radio"   name="sex3"     value="MALE" >     MALE     &emsp;
          <input type="radio"   name="sex3"     value="FEMALE"   checked="checked">   FEMALE   &emsp;
          <input type="radio"   name="sex3"     value="OTHER">    OTHERS   &emsp;
          <?php } 
          else
          {?>
          
          <input type="radio"   name="sex3"     value="MALE" >     MALE     &emsp;
          <input type="radio"   name="sex3"     value="FEMALE">   FEMALE   &emsp;
          <input type="radio"   name="sex3"     value="OTHER"   checked="checked">    OTHERS   &emsp;
          <?php } ?> 




          <br><br></td>
        </tr>
        <tr>
          <td><p>BLOOD GRP :<br><br></p></td> 
          <td><select name="blood3" required>
          <option id="$blood1" checked="selected"> <?php echo $blood1 ?> </option>
            <option value="A+" id="A+"> A+ </option>
            <option value="A-" id="A-"> A- </option>
            <option value="AB+"id="AB+"> AB+ </option>
            <option value="AB-" id="AB-"> AB- </option>
            <option value="B+" id="B+"> B+ </option>
            <option value="B-" id="B-"> B- </option>
            <option value="O+" id="O+"> O+ </option>
            <option value="O-" id="O-"> O- </option>
            
          </select><br><br></td>
        </tr>
        <tr>
          <td><p>MOBILE NO :<br><br></p></td>
          <td><input type="tel"       name="phone3"   placeholder="000-0000-000" value=<?php echo $phone1 ?> maxlength="10" required><br><br></td>
        </tr>
        <tr>
          <td><p>DESIGNATION :<br><br></p></td>     
          <td><input type="text"     name="desig3"   value="<?php echo $desig1 ?>"  required><br><br></td>
        </tr>
        <tr>
          <td><p>SALARY :<br><br></p></td>     
          <td><input type="number"     name="sal3"   value=<?php echo $sal1 ?>  required><br><br></td>
        </tr>
      </table>
  
      <center><input type="submit" value="Submit" class="button3"></center>
    </form>
    
           
            
        

</body>
</html>