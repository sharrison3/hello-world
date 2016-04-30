<!DOCTYPE html>
<html>
	<head>
		<title>MUSICSHARE - Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial=scale-1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-latest.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--<script src="login-validator.js"></script>-->
	</head>
	<body>
		<!-- navbar container -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!--- LOGO --->
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">MUSICSHARE</a>
				</div>
				<!--- NAVBAR --->
				<div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- beginning of main content -->
		<div class="container">
		<div class="span12 text-center">
			<form role="form" action='index.php' method='post'>
				<h1>Expand Your Music Pallet</h1>
				<h3>Login or <a data-toggle="modal" data-target="#popUp">Sign-up</a></h3>
					<div class="form-group">
					<input type="username" class="form-control" id="uname" placeholder="password" value='<?php if(isset($_POST['uname'])){echo $_POST['username'];}?>'/>
						<p id="uname-err"></p>
						
					</div>
					<div class="form-group">
					<input type="password" class="form-control" id="pword" value='<?php if(isset($_POST['password'])){echo $_POST['pword'];}?>' placeholder="Password"/>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
			</form>
		<div>
		
			<!-- signup popup window -->
			<div class="modal fade" id="popUp">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h2 class="modal-title">Create an account with us</h2>
						</div>
						
						<div class="modal-body">
							<form role="form" action='user-info.php' method='post'>
								<div class="form-group">
									<input type="username" class="form-control" placeholder="Username" id="signUpUsername">
									<p id="user-err"></p>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name" id="fName">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last Name" id="lName">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email" id="signUpEmail">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password" id="signUpPassword">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Re-Enter Password" id="signUpCPassword">
								</div>
							</form>
						</div>
						
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary btn-block">Sign-up</button>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>
