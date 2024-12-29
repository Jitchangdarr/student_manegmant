<?php

include 'connection.php';

if (isset($_GET['delete_id'])) {
    $user_id = $_GET['delete_id'];

    $sql = "DELETE FROM  `admission`  WHERE user_id='$user_id'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:student_display.php');
    } else {
?>
        <script>
            alert("data not submit");
        </script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>