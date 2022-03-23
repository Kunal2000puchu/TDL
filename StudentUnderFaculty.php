<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "TDLallocation");


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully in student under faculty"."<br>";

$qr3= "select * from TDL_details where f_id ='".$_POST["username"]."'";
$res3= $conn->query($qr3);
$row3=$res3->fetch_assoc();

//echo $row3["t_id"]." ".$row3["subject_name"]." in studentunderfacultyphp file";
$qr4="select sid from currentTDL where t_id='".$row3["t_id"]."'";
$res4=$conn->query($qr4);

while($row4=$res4->fetch_assoc())
{
   $qr5="select * from student where sid='".$row4["sid"]."'";
   $res5=$conn->query($qr5);
   $row5=$res5->fetch_assoc();
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>STUDENT LIST</title>
   
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <section>
        <h1>STUDENT LIST</h1>

        <table>
            <tr>
                <th>Enrollment No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Semester</th>
                <th>School</th>
                <th>Mobile NO</th>
                <th>Email Id</th>
  
<tr>               
                <td><?php echo $row5['sid'];?></td>
                <td><?php echo $row5['fname'];?></td>
                <td><?php echo $row5['lname'];?></td>
                <td><?php echo $row5['semester'];?></td>
                <td><?php echo $row5['school_id'];?></td>
                <td><?php echo $row5['mobile_no'];?></td>
                <td><?php echo $row5['email_id'];?></td>
</tr>
      </table>
    </section>
</body>
</html>