<html lang="en">
<head>
    <title>
        UPDATE OR DELETE
    </title>
    <style>
    table, th, td {
        border: 1px solid lightslategray;
        padding: 15px;
        }
        p {
        color: white;
        font-family: courier;
        text-align: center;
        text-decoration: underline;
        font-size: 16%;
        }
        a{color: #96b3b0;}
    body {
        background-color: #003366;
        font-family: "Times New Roman", Helvetica, sans-serif;
        font-size: 16em;
        color: 	#CCFF99;
        }

    </style>
    

</head>
<body>
        <p><b>EMPLOYEE DETAILS</b></p>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EMPLOYEE";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    $sql="SELECT*FROM PAYROLL";
    $result= $conn->query($sql);

    ?> 
    <table style="width:100%">
    <tr>
        <th>EMPID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>DOB</th>
        <th>GENDER</th>
        <th>BLOOD GRP</th>
        <th>MOBILE NO</th>
        <th>DESIGNATION</th>
        <th>SALARY</th>
        <th style="color:#b6b1af;">UPDATE</th>
        <th style="color:#b6b1af;">DELETE</th>
    </tr>

    <?php
    if($result->num_rows>0) {
        while($row = $result->fetch_assoc()) {
        $id1= $row["EMPID"];
            ?>
        
        <tr>
        <td> <?php echo $row["EMPID"];  ?></td>
        <td> <?php echo $row["NAME"];  ?></td>
        <td> <?php echo $row["AGE"];  ?></td>
        <td> <?php echo $row["DOB"];  ?></td>
        <td> <?php echo $row["GENDER"];  ?></td>
        <td> <?php echo $row["BLOOD_GRP"];  ?></td>
        <td> <?php echo $row["PHONE"];  ?></td>
        <td> <?php echo $row["DESIGNATION"];  ?></td>
        <td> <?php echo $row["SALARY"];  ?></td>
        <td> <a href="update.php?id2=<?php echo $id1; ?>" > UPDATE</a></td>
        <td> <a href="delete.php?id1=<?php echo $id1; ?>">DELETE</a></td>
        
        
    </tr>
    <?php
    
            
        }
    } else {
        echo "0 result";
    }
    echo"</table>";
    $conn->close();
    
?>
</table>
</body>  
</html>    
