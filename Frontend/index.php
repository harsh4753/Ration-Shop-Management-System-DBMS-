<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>
<style>
	#heading {
		color: #120303;
		font-size: 50px;
		width: 500%;
		margin-left: -100%;
		/* text-align: left; */

	}
</style>

<body>
	<div class="image">
		<img src="ration.jpg">
	</div>


	<form action=" validate.php" method="post">
		<div class="login-box">
			<div id="heading">Ration Shop Distribution System
			</div>
			<div>
				<h1>Login</h1>

				<div class="textbox">
					<i class="fa fa-user"
						aria-hidden="true"></i>
					<input type="text"
						placeholder="Username"
						name="username" value="">
				</div>

				<div class="textbox">
					<i class="fa fa-lock"
						aria-hidden="true"></i>
					<input type="password"
						placeholder="Password"
						name="password" value="">
				</div>

				<input class="button" type="submit"
					name="login" value="Sign In">
			</div>
		</div>

	</form>


</body>

</html>