<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Login or Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="/css/system.css"rel="stylesheet">
</head>
<body>
<div id="header">
				<div id="head-topic">Dmayanthi perera</div>
				
	<div class="main">
    
		<div class="card">
			<div class="card-title">
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> User <span id="action_title">Login</span></h3>
			</div>
			<div class="card-body">
				<div class="card-body-top">
					<button id="login" class="btn" name="login" onclick="login()">login</button>
					<button id="register" class="btn" name="register" onclick="register()">register</button>
					<div id="pointer-btn"></div>
				</div>
				<div class="card-body-login">
					<form id="login-form">
						<input class="input-form" type="email" placeholder="Enter your email" required><br><br>
						<input class="input-form" type="Code" placeholder="Code" required><br><br>
						<input class="input-form" type="password" placeholder="Enter your password" required><br><br><br>
						<input class="submit-form" type="submit" value="Login">
					</form>
					<form id="register-form">
						<input class="input-form" type="name" placeholder="Enter your full name" required><br><br>
						<input class="input-form" type="code" placeholder="Code" required><br><br>
						<input class="input-form" type="email" placeholder="Enter your email" required><br><br>
						<input class="input-form" type="password" placeholder="Enter your password" required><br><br>
						<input class="submit-form" type="submit" value="Register">
					</form>
                </div>
                
			</div>
        </div>
        
    </div>
    <div id="footer">Copyright © Niru Develper</footer>

	<script>
		var x = document.getElementById("login-form");
		var y = document.getElementById("register-form");
		var z = document.getElementById("pointer-btn");
		var l = document.getElementById("login");
		var r = document.getElementById("register");
		var ac = document.getElementById("action_title");

		function register(){
			x.style.left = "-450px";
			y.style.left = "25px";
			z.style.left = "215px";
			l.style.color = "#848484";
			r.style.color = "#00ffc3";
			ac.textContent = "Register";
		}

		function login(){
			x.style.left = "25px";
			y.style.left = "450px";
			z.style.left = "30px";
			l.style.color = "#00ffc3";
			r.style.color = "#848484";
			ac.textContent = "Login";
		}		
	</script>
</body>
</html>