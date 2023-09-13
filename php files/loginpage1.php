<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/style1.css">
	</head>
	<body>
		<div class="hero">
			<div class="form-box">
				
				<div class="button-box">
					<div id="btn"></div>
						<button type="button" class="toggle-btn" onclick="login()"><p>Log In</p></button>
						<button type="button" class="toggle-btn" onclick="register()"><p>Sign Up</p></button>
				</div>
				<div class="social-icons">
					<a href="https://www.facebook.com/GadKilleSafar"><img src="../images/fb.png"></a>
					<a href="https://twitter.com/HelloMTDC?s=20"><img src="../images/tw.png"></a>
					<a href="httphttps://www.treksandtrails.org/"><img src="../images/gp.png"></a>
				</div>
				<form id="login" class="input-group" action="validation.php" method="POST" autocomplete="off">
					<input type="text" name="user" class="input-field" placeholder="User Id" autocomplete="off" required >
					<input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
					<input type="checkbox" class="check-box"><span><p>Remember password</p></span>
					<button type="submit" class="submit-btn">Log In</button>
				</form>
				
				<form id="register" class="input-group" action="registration.php" method="POST" autocomplete="off">
					<input type="text" name="user" class="input-field" placeholder="User Id" autocomplete="off" required>
					<input type="email" name="email" class="input-field" placeholder="Enter Email" autocomplete="off" required>
					<input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
					<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
					<button type="submit" class="submit-btn">Register</button>
				</form>
			</div>
		</div>
		
		<script>
			var x= document.getElementById("login");
			var y= document.getElementById("register");
			var z= document.getElementById("btn");	

			function register(){
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
			}
			function login(){
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0";
			}
		</script>
		
	</body>
</html>