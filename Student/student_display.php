<?php
session_start();
include('connection.php');
$userid = $_SESSION['id'];
// fetch data in database
$sql = "SELECT * FROM admission WHERE `user_id`='$userid'";
$data = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background: url('display.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    h1 {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 15px;
      border-radius: 5px;
    }

    table {
      background-color: rgba(0, 0, 0, 0.8);
    }

    a {
      text-decoration: none;
    }
  </style>

  <script>
    // Alert for Edit button (Optional)


    // Confirmation for Delete button
    function confirmDelete(url) {
      if (confirm("Are you sure you want to delete this record?")) {
        // Redirect to the delete URL
        window.location.href = url;
      }
    }
  </script>
</head>

<body>
  <div class="container">
    <h1 class="text-center text-white mt-5">Student Details</h1>
    <table class="table table-hover table-dark mt-5 my-5">
      <thead>
        <tr>
          <th scope="col">Serial No</th>
          <th scope="col">User ID</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Course</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Confirm Password</th>
          <th scope="col">Pdf</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        while ($returndata = mysqli_fetch_assoc($data)) { ?>
          <tr>
            <td>
              <?php echo $i;
              $i++;
              ?>
            </td>
            <!-- Display data -->
            <td><?php echo $returndata['user_id'] ?></td>
            <td><?php echo $returndata['name'] ?></td>
            <td><?php echo $returndata['phone'] ?></td>
            <td><?php echo $returndata['cource'] ?></td>
            <td><?php echo $returndata['email'] ?></td>
            <td><?php echo $returndata['password'] ?></td>
            <td><?php echo $returndata['cpassword'] ?></td>
            <td>
              <!-- Pass edit.php URL to confirmDelete function -->

              <button type="button" name="view" class="btn btn-outline-info"><a class="text-white" href="upload/<?php echo $returndata['pdf']; ?>" download>View</a></button>
            </td>
            <td>
              <button type="button" name="edit" class="btn btn-outline-info"><a class="text-white" href="upload/<?php echo $returndata['pdf']; ?>" download>Download</a></button>
            </td>
            <td>
              <!-- Pass edit.php URL to confirmDelete function -->
              <button type="button" name="edit" class="btn btn-outline-primary" onclick="myFunction()"><a class="text-white" href="edit.php?edit_id=<?php echo $returndata['user_id']  ?> ">Edit</a></button>
            </td>
            <td>
              <!-- Pass delete.php URL to confirmDelete function -->
              <button type="button" id="delete" name="delete" class="btn btn-outline-danger" onclick="confirmDelete('delete.php?delete_id=<?php echo $returndata['user_id'] ?>')">Delete</button>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>