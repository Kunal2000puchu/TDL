<html style="font-size: 16px;">
  <head>
  
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-5.css" media="screen">
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
    <meta property="og:title" content="Page 5">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-6918"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="290" data-image-height="174">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="skrollable u-align-center u-clearfix u-image u-section-1" id="carousel_c246" data-image-width="1280" data-image-height="477">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-merriweather u-text u-text-body-alt-color u-text-1">Sign In<br>
                  

        </h1>
        <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1"><span class="u-border-8 u-border-white u-file-icon u-icon u-icon-circle u-spacing-0 u-icon-1"><img src="images/3408455.png" alt=""></span>
            <div class="u-form u-login-control u-form-1">
              <form action="authentication.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-label u-text-grey-30 u-label-1">Username *</label>
                  <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-label u-text-grey-30 u-label-2">Password *</label>
                  <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" class="u-border-10 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-50 u-input-2" required="">
                </div>
            
                 <label for="roles" class="u-label u-text-grey-30 u-label-1">Choose a Role * : </label>
                    <select name="roles" id="roles">
                    <option value="student">Student</option>
                    <option value="faculty">Faculty</option>
                    <option value="fcord" >Faculty Coordinator</option>
                    <option value="ucord">TDL Coordinator</option>
                  </select>
                <div class="u-form-checkbox u-form-group u-label-top">
                  
                  
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" class="u-form-control-hidden">
                  <a href="#" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-2-base u-radius-50 u-btn-1">Login</a>
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
        
          </div>
        </div>
      </div>
    </section>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }
            $("input[type=submit]").click(function() {
			
			var atLeastOneChecked = false;
			$("input[type=radio]").each(function() {
			
				// If radio button not checked
				// display alert message
				if ($(this).attr("checked") != "checked") {
				
					// Alert message by displaying
					// error message
					$("#msg").html(
		"<span class='alert alert-danger' id='error'>"
		+ "Please Choose atleast one</span>");
				}
			});
		});  
        </script>  
  </body>
</html>
