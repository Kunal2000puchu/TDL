<?php
$qr1="select t_id from faculty where f_id='".$_POST["username"]."'";
$res1 = $conn->query($qr1);

if($res1->num_rows>0)
{
  $row=$res1->fetch_assoc();
  //echo $row["t_id"];


  $qr2="select sid from currentTDL where t_id='".$row["t_id"]."'";
  $res2=$conn->query($qr2);

  while($row2=$res2->fetch_assoc())
  {
    //echo $row2["sid"];
    $qr3="select * from student where sid='".$row2["sid"]."'";
    $res3=$conn->query($qr3);
$row3=$res3->fetch_assoc();
//echo $row3["fname"]." ".$row3["lname"];

include 'StudentUnderFaculty.php';
  }
}
else 
echo "record not found";



?>