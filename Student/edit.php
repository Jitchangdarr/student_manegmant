<?php

if(isset($_POST['jit']))
{
    include 'connection.php';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $cource = $_POST['cource'];
    $mail = $_POST['mail'];
    $user_id = $_GET['edit_id'];
    $sql="UPDATE `admission` SET `name`='$name',`phone`='$phone',`cource`='$cource',`email`='$mail' where `user_id`='$user_id'";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        header('location:student_display.php');
    }
    else
        {
            echo "error";
        }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .form-control {
            width: 19rem;
        }

        .form-select {
            width: 19rem;
        }

        .container {
            width: 40rem;
            padding: 2rem;
            border: 1px solid black;
            border-radius: 1rem;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        form {
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            margin-top: 5rem;
            margin: auto;
        }

        input {
            position: relative;
            margin: auto;
        }
    </style>

   
</head>

<body>
    <div class="container mt-5">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" id="exampleInputphone" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Select Course</label>
                <select class="form-select" id="course" name="cource" required>
                    <option value="" disabled selected>Select a course</option>
                    <option value="mern">MERN Stack</option>
                    <option value="ml">Machine Learning</option>
                    <option value="java">Java Full Stack</option>
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="csharp">C#</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input"  id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
            <button type="submit" name="jit" class="btn btn-primary">Update?</button>
        </form>
    </div>
</body>

</html>