<html>  
<head>  
    <title>PHP login system</title>
    <link rel = "stylesheet" type = "text/css" href = "page1.css">   
</head>  
<body> 
    <header><img src="https://sushantuniversity.edu.in/front-assets/images/Sushant-University-Logo-02.png" alt="Gurgaon University" class="img-responsive home-logo"></header> 
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <input type="radio" id="age1" name="age" value="student">
            <label for="age1">student</label><br>
            <input type="radio" id="age1" name="age" value="faculty">
  <label for="role 1">faculty</label><br>
  <input type="radio" id="age1" name="age" value="fcord">
  <label for="role1">faculty codinator</label><br>
  <input type="radio" id="age1" name="ucord" value="30">
  <label for="role1">university cordinator</label><br>
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>
            <footer><div></div> </footer>  
        </form>  
    </div>
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