<?php
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// Validate and store session data
	$_SESSION['name'] = htmlspecialchars($_POST['name']);
	$_SESSION['phone'] = htmlspecialchars($_POST['phone']);
	$_SESSION['course'] = htmlspecialchars($_POST['course']);
	// File upload handling
	if (isset($_FILES['pdf'])) {
		$filename = $_FILES['pdf']['name'];
		$filetype = $_FILES['pdf']['type'];
		$filetmpname = $_FILES['pdf']['tmp_name'];
		$filesize = $_FILES['pdf']['size'];

		$maxsize = 2 * 1024 * 1024; // 2MB limit
		$uploadDirectory = "uploads/";

		// Create upload directory if not exists
		if (!is_dir($uploadDirectory)) {}
			mkdir(
				$uploadDirectory,
				0777,

				true
			);
		}

		// Validate file size
		if ($filesize > $maxsize) {
			echo "<script>alert('File size is too large. Please upload a file smaller than 2MB.');</script>";
		}



		// Proceed to move the file if valid
		else {
			$filedestination = $uploadDirectory . basename($filename);

			// Move the uploaded file
			if (move_uploaded_file($filetmpname, $filedestination)) {
				// Redirect to admission2.php after successful upload
				$_SESSION['uploaded_file'] = $filedestination; // Store file path in session
				header('Location: admission2.php');
				exit();
			} else {
				echo "<script>alert('File upload failed. Please try again.');</script>";
			}
		}
	} else {
		echo "<script>alert('Please upload a PDF file.');</script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admission1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>

	<!-- nav bar -->
	<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="/home.php">HOME</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/Admin/Admin_login.php">ADMIN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ADMISSION</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Bcom</a></li>
							<li><a class="dropdown-item" href="/Diploma/diploma.php">Diploma</a></li>
							<li><a class="dropdown-item" href="#">Bca</a></li>
							<li><a class="dropdown-item" href="#">Mca</a></li>
							<li><a class="dropdown-item" href="#">B.Tech</a></li>
							<li><a class="dropdown-item" href="#">M.Tech</a></li>
							<li><a class="dropdown-item" href="#">Mba</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" aria-disabled="true" href="/ContactUs/contactus.php">CONTACT US</a>
					</li>

					<li class="nav-item">
						<a href="/Student/student_login.php" class="nav-link active" aria-current="page">LOGIN</a>
					</li>
				</ul>
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>



	<!-- admission part -->
	<div class="container">
		<h1>Student Admission</h1>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="studentName" class="form-label">Name</label>
				<input type="text" class="form-control" id="studentName" name="name" aria-describedby="nameHelp"
					placeholder="Enter Your Name" data-bs-toggle="tooltip" title="Please enter your name" required>
			</div>

			<!-- Phone -->
			<div class="mb-3">
				<label for="phone" class="form-label">Phone</label>
				<input type="number" class="form-control small-input" id="phone" name="phone" placeholder="Enter Your Phone Number"
					pattern="\d{10}" title="Enter a valid 10-digit phone number" required>
			</div>

			<!-- Select Course -->
			<div class="mb-3">
				<label for="course" class="form-label">Select Course</label>
				<select class="form-select" id="course" name="course" required>
					<option value="" disabled selected>Select a course</option>
					<option value="mern">MERN Stack</option>
					<option value="ml">Machine Learning</option>
					<option value="java">Java Full Stack</option>
					<option value="php">PHP</option>
					<option value="python">Python</option>
					<option value="csharp">C#</option>
				</select>
			</div>

			<!-- pdf upload must -->
			<div class="student-admission-form">
				<p class="text-center text-muted">
					Complete the form below to apply for admission. Ensure all required fields are filled out accurately.
					Upload your marksheet in PDF format as supporting documentation.
				</p>
				<div class="mb-3 pdfUploads mt-5">

					<!-- Styled Label -->
					<label for="pdfUpload" class="upload-button">Upload PDF</label>
					<!-- Hidden File Input -->
					<input type="file" class="form-control" id="pdfUpload" accept=".pdf" name="pdf" style="display: none;" required>
				</div>
			</div>
			<!-- Submit -->
			<div class="mb-3">
				<center><button type="submit" name="btn" class="btn btn-primary">Next</button></center>
			</div>
			<!-- Login Link -->
			<p>Already have an account? <a href="/Student/student_login.php">Login</a></p>
		</form>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>