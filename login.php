

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Form</title>
    <link rel="stylesheet" href="loginstyle.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body background="bgc3.jpg">
<center>
			
		<div class="form_deg">
            

			<h4><?php 
				error_reporting(0);
				session_start();
				session_destroy();
				if( isset( $_SESSION['completed']) ){
					header("Location: index.php");
				echo $_SESSION['loginMessage'];
				} 
			?></h4>
			<form action="login_check.php" method="POST" class="login_form">	

            <center> <h3>Login</h3> </center>
				<div>
					<label class="label_deg">Username </label>
					<input type="text" name="username">
				</div>
                <br>
				<div>
					<label class="label_deg">Password </label>
					<input type="Password" name="password">
				</div>
                <br>
				<div>
					
					<input class="btn btn-primary" type="submit" name="submit" value="Login">
				</div>

			</form>


		</div>

</center>
</body>
</html>