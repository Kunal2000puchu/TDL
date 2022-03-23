<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Always Travel w​ith Us, ​Check your travel freedom, ​Things to do, Travel History">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Add Faculty </title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="studenthomepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/LOGO.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Delete Student">
    <meta property="og:type" content="website">
  </head>

  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-6918"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="290" data-image-height="174">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="skrollable u-align-center u-clearfix u-image u-section-1" id="carousel_c246" data-image-width="1280" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-1">Add Faculty</h1>
        <div class="u-form u-form-1">


<form action="" method="post" >  
  <div class="container">  
 
  <label class="u-label u-text-palette-5-light-1 u-label-1"> Faculty ID : </label>   
<input type="text" name="f_id" placeholder= " Enter Faculty ID" size="15"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white"required /> <br>     
<label  class="u-label u-text-palette-5-light-1 u-label-1"> TDL ID : </label>    
<input type="text" name="t_id" placeholder="Enter TDL ID" size="15" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white"required /><br>
<label  class="u-label u-text-palette-5-light-1 u-label-1">Faculty Name. : </label>    
<input type="text" name="name" placeholder="Enter Faculty Name." size="30" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white"required /> <br>
<label  class="u-label u-text-palette-5-light-1 u-label-1"> School ID. : </label> 
<input type="text" name="school_id" placeholder="Enter Your School ID." size="15" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white"required /> <br>
<label  class="u-label u-text-palette-5-light-1 u-label-1"> Mobile No. : </label>   
<input type="tel" name="mobile_no"  pattern="[789][0-9]{9}" placeholder="Enter Your Mobile No." size="30" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white"required /><br> 
<label  class="u-label u-text-palette-5-light-1 u-label-1"> Email ID. : </label>   
<input type="Email" name="email_id" placeholder="Enter Your Email ID." size="30" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white"required /><br> 


<button id="submit" type="submit" name="submit"class="u-active-palette-4-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-2-base u-radius-14 u-btn-1"  > 
      <span>Submit</span> 
</button>
</form> 
</html>

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
echo "Connected successfully"."<br>";
 
function get_value($conn,$str){
if($str!=''){
	$str = trim($str);
	return mysqli_real_escape_string($conn,$str);
	}
}

if(isset($_POST['submit'])) {
echo " Value submitted to database ";
      $f_id= get_value($conn, $_POST['f_id']);
      $t_id= get_value($conn, $_POST['t_id']);
	  $name= get_value($conn, $_POST['name']);
      $school_id= get_value($conn, $_POST['school_id']);
      $mobile_no= get_value($conn, $_POST['mobile_no']);
	  $email_id= get_value($conn, $_POST['email_id']);


      $sql = "insert into faculty (f_id,t_id,name,school_id,mobile_no,email_id) values('$f_id','$t_id','$name', '$school_id', '$mobile_no', '$email_id')";
      $conn->query($sql);
	
}


?>
