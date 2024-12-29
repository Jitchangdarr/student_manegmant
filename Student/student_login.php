<?php
$success = 0;
$data = 0;
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include 'connection.php';
    $email = $_POST['mail'];
    $pass = $_POST['password'];
    $sql = "SELECT * from admission WHERE email='$email' AND password='$pass'";
    $data = mysqli_query($con, $sql);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    if ($total) {
        $_SESSION['id'] = $result['user_id'];
        header("location:student_display.php");
        $success = 1;
    } else {
        // echo "user not found";
        header('Refresh: 2; URL=student_login.php');
        $data = 1;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="student_login.css">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar .logo {
            color: black;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
        }

        .navbar .logo:hover {
            color: #432E54;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;

        }

        .navbar ul li {
            position: relative;

        }

        .navbar ul li a {
            color: black;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar ul li a:hover {
            background-color: yellowgreen;
            color: black;
        }
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .menu-toggle div {
            width: 30px;
            height: 4px;
            background-color: red;
            margin: 4px 0;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .navbar ul {
                display: none;
                flex-direction: column;
                background-color: green;
                position: absolute;
                top: 50px;
                right: 20px;
                width: 200px;
                border-radius: 8px;
            }
            .navbar ul.active {
                display: flex;
            }
            .menu-toggle {
                display: flex;
            }
        }

        select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 8rem;
        }

        select:hover {
            background-color: yellowgreen;
            color: black;
        }

        select option {
            font-size: 16px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: white;
        }

        .navbar .active {
            padding: 5px 12px;
        }

        .navbar section {
            display: flex;
            gap: 20px;

        }
    </style>

    <script>
        function myfunction() {
            var x = document.getElementById("exampleInputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</head>

<body>

    <div class="container">
        <nav class="navbar">
            <a href="/home.php" class="logo">Student System</a>
            <div class="menu-toggle" id="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul id="nav-menu">
                <li class="active"><a href="/home.php">Home</a></li>
                <li class="active"><a href="#students">Students</a></li>
                <li><a href="#courses">Courses</a>
                    <select>
                        <option value="all">All</option>
                        <option value="cse">CSE</option>
                        <option value="eee">EEE</option>
                        <option value="ece">ECE</option>
                        <option value="mech">MECH</option>
                    </select>
                </li>
                <li class="active"><a href="#settings">Settings</a></li>
                <li class="active"><a href="/Logout/all_off.php">Logout</a>

                </li>
            </ul>
        </nav>
    </div>
    <?php
    if ($success == 1) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
    ?>
    <?php

    if ($data == 1) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>⚠️Account Not Found!</strong> No account is associated with this email. Please sign up first..
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }


    ?>


    <div class="container  parent my-5">
        <h1>Student Login</h1>
        <form method="post" action="">
            <!-- email  -->
            <div class="" class="mb-3 mt-5">
                <label for="exampleInputEmail1" class="text-center" class="form-label">Email address</label>
                <input type="email" name="mail" class="form-control someInput form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control someInput  form-control-sm " id="exampleInputPassword">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" onclick="myfunction()" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>

            <center><button type="submit" class="btn btn-primary">Submit</button></center>
        </form>
    </div>
</body>

</html>