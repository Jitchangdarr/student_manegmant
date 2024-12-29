<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">

    <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script defer src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new DataTable('#example');



        });
    </script>
    <style>
        /* Add margin around the table */
        #example_wrapper {
            margin: 130px auto;
            width: 80%;
            /* Optional: Control overall table width */
        }

        /* Make the table horizontally scrollable */
        .dataTables_wrapper {
            overflow-x: auto;
        }

        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .example {
            justify-content: center;
        }

        .sidenav {
            height: 100%;
            width: 13%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        h2 {
            text-align: center;

        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .openbtn {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    iam jit
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-4">

    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/home.php">Home</a>
        <a href="/Admin/newadmission.php">New Admission</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <div id="main">

        <span class="openbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "230px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }

    
    </script>

    <h2>Student Records</h2>
    <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Admission Date</th>
                    <th>Student Name</th>
                    <th>Age</th>
                    <th>Roll Number</th>
                    <th>Grade</th>
                    <th>Teacher</th>
                    <th>Attendance Percentage</th>
                    <th>Report</th>
                    <th>Block</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" id="hono" class="btn btn-danger btn-sm" onclick="alert('admin was aBlock')" data-target="#exampleModal">
                        
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>15/08/2022</td>
                    <td>Jane</td>
                    <td>19</td>
                    <td>102</td>
                    <td>B</td>
                    <td>Mr. Johnson</td>
                    <td>88.3%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" id="hono" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>28/05/2023</td>
                    <td>Jit</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>

                    </td>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button>
                    </td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>22/05/2023</td>
                    <td>John</td>
                    <td>20</td>
                    <td>101</td>
                    <td>A</td>
                    <td>Mrs. Smith</td>
                    <td>95.5%</td>
                    <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            View Report
                        </button></td>
                    <td><button type="button" class="btn btn-danger btn-sm" onclick="alert('Block')" data-target="#exampleModal">
                            Block
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>