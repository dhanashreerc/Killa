<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/style2.css">
	</head>
	<body>
		<div class="hero">
			<div class="form-box">
				
				<div class="button-box">
					<div id="btn"></div>
						<button type="button" class="toggle-btn" onclick="register()"><p>Sign Up</p></button>
				</div>
				<div class="social-icons">
					<a href="https://www.facebook.com/GadKilleSafar"><img src="../images/fb.png"></a>
					<a href="https://twitter.com/HelloMTDC?s=20"><img src="../images/tw.png"></a>
					<a href="httphttps://www.treksandtrails.org/"><img src="../images/gp.png"></a>
				</div>
				
				
				<form id="register" class="input-group" action="registration1.php" method="POST" autocomplete="off">
					<input type="text" name="user" class="input-field" placeholder="User Id" autocomplete="off" required>
					<input type="email" name="email" class="input-field" placeholder="Enter Email" autocomplete="off" required>
					<input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
					<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
					<button type="submit" class="submit-btn">Register</button>
				</form>
			</div>
		</div>
		
	
		
	</body>
</html>