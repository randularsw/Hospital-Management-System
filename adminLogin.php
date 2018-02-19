<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>

	<body>
		<div class="container">
			<header><h1>Admin Login</h1></header>
			<section>
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
						
							<form action="admin.php" method="POST">
								<h1>Log In</h1>
								<p>
                                    <label for="username" class="uname" data-icon="u" >Enter Admin ID </label>
                                    <input id="user" name="user" required="required" type="text" placeholder="Admin ID"/>
								</p>
								<p>
									<label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="pass" name="pass" required="required" type="password" placeholder="DID****" />
								</p>
								<p class="login button"> 
                                    <input type="submit" id="btn" value="Login" />
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>