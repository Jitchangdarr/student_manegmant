<?php
include 'connection.php';

$sql = "SELECT * FROM `admission`";

$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <!-- Animate.css for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        /* Apply fade-in animation to table rows */
        #example tbody tr {
            animation: fadeIn 0.6s ease-in-out;
        }

        /* Hover effect for table rows */
        #example tbody tr:hover {
            background-color: #f2f2f2;
            transform: scale(1.02);
            transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;
        }

        /* Highlight header with animation */
        #example thead th {
            animation: fadeIn 0.8s ease-in-out;
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }

        /* Add input field styling */
        .inputs {
            margin-bottom: 15px;
        }
    </style>

    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = new DataTable('#example', {
                ordering: true, // Enable or disable ordering as needed
                paging: true, // Enable pagination
                searching: true, // Enable search box
                pageLength: 10, // Number of rows per page
            });

            const minEl = document.querySelector('#min');
            const maxEl = document.querySelector('#max');

            // Custom filtering function for user_id
            $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                const min = parseInt(minEl.value, 10);
                const max = parseInt(maxEl.value, 10);
                const userId = parseInt(data[0]) || 0; // User ID column (first column)

                if (
                    (isNaN(min) && isNaN(max)) || // Both empty
                    (isNaN(min) && userId <= max) || // Only max set
                    (min <= userId && isNaN(max)) || // Only min set
                    (min <= userId && userId <= max) // Both set
                ) {
                    return true;
                }
                return false;
            });

            // Trigger redraw on input change
            minEl.addEventListener('input', function() {
                table.draw();
            });
            maxEl.addEventListener('input', function() {
                table.draw();
            });
        });
    </script>

</head>

<body>

    <!-- Filter inputs for user_id -->
    <div class="inputs mb-3">
        <label for="min">Minimum User ID:</label>
        <input type="number" id="min" name="min" class="form-control" placeholder="Enter minimum user_id">
    </div>
    <div class="inputs mb-3">
        <label for="max">Maximum User ID:</label>
        <input type="number" id="max" name="max" class="form-control" placeholder="Enter maximum user_id">
    </div>

    <table id="example" class="display table table-striped table-hover animate__animated animate__fadeIn" style="width:100%">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['user_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['cource']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['password']); ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>

    </table>

</body>

</html>