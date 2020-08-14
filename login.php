<!doctype html>
<html lang="en">

	<head>
  
		<title>Registration Form</title>
		
		<link rel="stylesheet" type="text/css" href="bootstrap.css">

	
	</head>
	
	<body>
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-lg-6">
				
					<h1>Login Form</h1>
					
					<form action="validation.php" method="post">
					
						<div class="form-group">
						
							<label>Username</label>
							
							<input type="text" name="user" class="form-control">
						
						</div>
						
						<div class="form-group">
						
							<label>Password</label>
							
							<input type="password" name="password" class="form-control">
						
						</div>
						
						<button type="submit" class="btn btn-primary">Login</button>
					
					</form>
				
				</div>
				
				<div class="col-lg-6">
				
					<h1>Signin Form</h1>
					
					<form action="registration.php" method="post">
					
						<div class="form-group">
						
							<label>Username</label>
							
							<input type="text" name="user" class="form-control">
						
						</div>
						
						<div class="form-group">
						
							<label>Password</label>
							
							<input type="password" name="password" class="form-control">
						
						</div>
						
						<button type="submit" class="btn btn-primary">Signin</button>
					
					</form>
				
				</div>
			
			</div>
		
		</div>
	
	</body>
	
</html>