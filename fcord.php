<?php
$qr1="select fc_id from loginfcord where fc_id='".$_POST["username"]."'";
$res1 = $conn->query($qr1);

if($res1->num_rows>0)
{
  $row=$res1->fetch_assoc();

  $qr2="select school_id from loginfcord where fc_id='".$row["fc_id"]."'";
  $res2=$conn->query($qr2);

  while($row2=$res2->fetch_assoc())
  {
    $qr3="select * from TDL_details where school_id='".$row2["school_id"]."'";
    $res3=$conn->query($qr3);
$row3=$res3->fetch_assoc();


  }
}
else 
echo "record not found";
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
        <h1>LIST OF SUBJECT</h1>

        <table>
            <tr>
                <th>TDL Subject Code</th>
                <th>Faculty ID</th>
                <th>Subject Name</th>
                <th>School Id</th>
                <th>Seat Capacity</th> 
<tr>               
                <td><?php echo $row3['t_id'];?></td>
                <td><?php echo $row3['f_id'];?></td>
                <td><?php echo $row3['subject_name'];?></td>
                <td><?php echo $row3['school_id'];?></td>
                <td><?php echo $row3['vacancy'];?></td>
</tr>
      </table>
    </section>
</body>
</html>