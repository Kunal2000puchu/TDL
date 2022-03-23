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
 
$sql = "DELETE FROM student WHERE sid='".$_POST["sid"]."'";
$conn->query($sql);

if ($conn->query($sql) === TRUE) {
}
	
?>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Always Travel w​ith Us, ​Check your travel freedom, ​Things to do, Travel History">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Delete Student</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="deletestudent.css" media="screen">
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
    <meta property="og:title" content="StudentEnrollmentForm">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-6918"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="290" data-image-height="174">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="skrollable u-align-center u-clearfix u-image u-section-1" id="carousel_c246" data-image-width="1280" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-1">Delete Student</h1>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <input type="hidden" id="siteId" name="siteId" value="55457165">
            <input type="hidden" id="pageId" name="pageId" value="35679171">
            <div class="u-form-group u-form-name">
              <label for="name-6f84" class="u-label">Roll Number</label>
              <input type="text" placeholder="Enter Roll Number To be Deleted" id="name-6f84" name="sid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Data deleted from the database. </div>
            <div class="u-form-send-error u-form-send-message"> Data deleted from the database .</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
  
  </body>
</html>

