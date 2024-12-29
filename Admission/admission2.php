<?php
$user = 0;
$success = 0;
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include 'connection.php';
    // fetch and store session data
    $name = $_SESSION['name'];
    $number = $_SESSION['phone'];
    $course = $_SESSION['course'];
    $file = $_SESSION['uploaded_file'];
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    //fetch data from database
    $sql = " SELECT * FROM admission WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "user already present";

            $user = 1;
            header('Refresh: 3; URL=admission2.php');
        } else {
            if ($password === $cpassword) {

                $sql = "INSERT INTO `admission`(`user_id`, `name`, `phone`, `cource`, `email`, `password`, `cpassword`, `pdf`) VALUES ('','$name','$number','$course','$email','$password','$cpassword','$file') ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    // echo "signup successfully";

                    $success = 1;
                    header('Refresh: 3; URL=../Student/student_login.php');
                }
            } else {
?>
                <script>
                    alert("please check the password");
                </script>

<?php
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission2</title>
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
            var y = document.getElementById("exampleInputPassword2");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').click(function() {
                $('[data-bs-toggle="tooltip"]').tooltip();
            })
        })
    </script>
</head>


<body>

    <?php
    if ($user == 1) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>user already present</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    if ($success == 1) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>register successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home.php">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Admin/admin_login.php">ADMIN</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ADMISSION
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bcom</a></li>
                            <li><a class="dropdown-item" href="#">Diploma</a></li>
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
                        <a class="nav-link disabled" aria-disabled="true">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Student/student_login.php">LOGIN</a>
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
    <h1>Student Admission</h1>
    <div class="container">
        <form class="from" method="post" action="">
            <!-- email -->
            <div class="mb-4 my-4">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control small-input" class="form-control form-control-sm" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp" data-bs-toggle="tooltip" title="please enter the email" required placeholder="Enter the email">
            </div>

            <!-- password -->

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control form-control-sm small-input"
                    id="exampleInputPassword1"
                    name="password"
                    title="Enter the strong password"
                    required
                    placeholder="Enter the password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                <small class="form-text text-muted">
                    Password must contain at least one number, one uppercase, one lowercase letter, and be at least 8 characters long.
                </small>
            </div>
            <!-- confirm password -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control small-input" class="form-control form-control-sm" id="exampleInputPassword2" name="cpassword" title="please Retype confirm password" placeholder="Confirm password">
            </div>
            <!-- show password checkbox -->
            <div class="mb-3 form-check">
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
            <p>You already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>