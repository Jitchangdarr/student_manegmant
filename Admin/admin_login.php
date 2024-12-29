<?php
$data = 0;
$failed = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'connection.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `admin` WHERE email='$email' AND password='$password'";

	$result = mysqli_query($con, $sql);

	if ($result) {
		$num = mysqli_num_rows($result);
		if ($num > 0) {

			$data = 1;
			header('Refresh: 1; URL=/Admin/student_record.php');
		} else {
			$failed = 1;
			header('Refresh: 1; URL=Admin_login.php');
		}
	}
}


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Signup.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script>
		function myFunction() {
			var x = document.getElementById("exampleInputPassword1");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}

		$(document).ready(function() {
			$('[data-bs-toggle="tooltip"]').click(function() {
				$('[data-bs-toggle="tooltip"]').tooltip();
			})
		})
	</script>

	<style>
		body {
			background-image: url('back.jpg');

		}

		h1 {
			color: black;
		}
	</style>

</head>
<?php

if ($data) {
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>🎉Welcome Back!</strong>You have logged in successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if ($failed) {
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>⚠️Account Not Found!</strong> No account is associated with this email. Please sign up first..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<body>

	<h1>Admin Login</h1>
	<div class="container">
		<h4>Admin Login</h4>

		<form class="from" method="post">
			<!-- email -->
			<div class="mb-4 my-5">
				<label class="my-3" for="exampleInputEmail1" class="form-label">Email address</label>
				<input type="" class="form-control small-input" class="form-control form-control-sm" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" data-bs-toggle="tooltip" title="please enter the email" required placeholder="Enter Your Email">
			</div>
			<!-- password -->
			<div class="mb-3">
				<label class="my-3" for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control small-input" class="form-control form-control-sm" id="exampleInputPassword1" name="password" title="please enter the password" required placeholder="Enter Your Password">
			</div>


			<!-- role -->
			<label for="role">Login as:</label>
			<select id="role" name="role">
				<option value="admin">Admin</option>
				<option value="principal">Principal</option>
				<option value="teacher">Teacher</option>
			</select>

			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
				<label class="form-check-label" for="exampleCheck1">Show password</label>
			</div>

			<!-- button -->
			<button type="submit" class="btn btn-primary active btn-lg btn-dark">Login</button>
		</form>

	</div>

</body>

</html>