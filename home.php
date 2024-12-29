<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<style>
		body {

			background-image: url(pic4.jpeg);
			background-size: 100vw 100vh;
			background-repeat: no-repeat;
			position: relative;
			background-position-x: center;
		}
	</style>
</head>

<body>

	<ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">


		<!-- home -->
		<li class="nav-item" role="presentation">
			<button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Home</button>
		</li>

		<!-- admission student -->

		<li class="nav-item" role="presentation">
			<a href="Admission/admission.php" class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Admission</a>
		</li>

		<!-- only admin can acesss -->
		<li class="nav-item" role="presentation">
			<a href="/Student/student_login.php" class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Login</a>
		</li>


		<li class="nav-item" role="presentation">

		<a href="../ContactUs/contactus.php" class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contact</a>

		</li>

		<li class="nav-item" role="presentation">
			<a href="" class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Feedback</a>
		</li>

		<li class="nav-item" role="presentation">
			<a href="../Logout/logout.php" class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Logout</a>
		</li>
	</ul>
</body>

</html>