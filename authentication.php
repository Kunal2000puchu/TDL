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
//echo "Connected successfully in authentication"."<br>";

$selected_radio = $_POST['roles'];
//echo $selected_radio."<br>";

if($selected_radio=="student")
{
  $sql = "SELECT * FROM loginStudent where sid='".$_POST["username"]."'";
  echo $sql."<br>";
 

$result = $conn->query($sql);

echo "got the result "."<br>";


  if ($result->num_rows > 0) 
  {
  // output data of each row
    while($row = $result->fetch_assoc())
    {
      echo "password: " . $row["password"]."<br>";
      if($_POST["password"]==$row["password"])
      {
      echo "you have logged in successfully.";
      header('location:studenthomepage.php');
      }
      else
      echo "password mismatch";
  }
} 
}
if($selected_radio=="faculty")
{
  $sql = "SELECT * FROM loginFaculty where f_id='".$_POST["username"]."'";

  //echo $sql."<br>";
 

$result = $conn->query($sql);

//echo "got the result "."<br>";


  if ($result->num_rows > 0) 
  {
  // output data of each row
    while($row = $result->fetch_assoc())
    {
      //echo "password: " . $row["password"]."<br>";
      if($_POST["password"]==$row["password"])
      {
      //echo "you have logged in successfully.";
      include 'faculty.php';
      }
      else
      echo "password mismatch";
  }
} 
}



if($selected_radio=="fcord")
{
  $sql = "SELECT * FROM loginfcord where fc_id='".$_POST["username"]."'";
  //echo $sql."<br>";
  $result = $conn->query($sql);

//echo "got the result "."<br>";


  if ($result->num_rows > 0) 
  {
  // output data of each row
    while($row = $result->fetch_assoc())
    {
      //echo "password: " . $row["password"]."<br>";
      if($_POST["password"]==$row["password"])
      {
      //echo "you have logged in successfully.";
      include 'fcord.php';
      }
      else
      echo "password mismatch";
  }
} 
}




if($selected_radio=="ucord")
{
  $sql = "SELECT * FROM loginucord where uc_id='".$_POST["username"]."'";
  //echo $sql."<br>";

$result = $conn->query($sql);

//echo "got the result "."<br>";


  if ($result->num_rows > 0) 
  {
  // output data of each row
    while($row = $result->fetch_assoc())
    {
      //echo "password: " . $row["password"]."<br>";
      if($_POST["password"]==$row["password"])
      {
      //echo "you have logged in successfully.";
      include 'ucord.php';
      }
      else
      echo "password mismatch";
  }
} 
}



?>
