<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "vgrs";


$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("connection fail");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="costume.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="head">
        <div class="container-fluid">
            <h3><b>VGRS</b></h3>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href=" #" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark " href="login.php">Login </a>
                            </li>
                            <li><a class="dropdown-item text-dark" href="adminlogin.php">Registration</a></li>
                            <li><a class="dropdown-item text-dark" href="st.php"> Status</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <div class="row">
        <div class=" side-manu col-lg-3 col-sm-3 col-md-3" id="side">
            <div class="container">
                <div class="card">
                    <img src="admin.png" class="card-img-top" id="adminimg" alt="admin">
                    <div class="card-body">
                        <h3 class="card-title text-dark"><b>admin profile</b></h3>
                    </div>
                    <ul class="list-group list-group-flush">
                    <?php
                        $sql = "SELECT * FROM `admin`";
                        $result = $conn->query($sql) or die("queary failed");
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <div class="admindata">
                        <ul>
                            <li><b>name:- </b> <?php echo $row['name']; ?></li>
                            <li><b>phone no:-</b>  <?php echo $row['phoneno']; ?></li>
                            <li><b>village:-</b>  <?php echo $row['village']; ?></li>
                            <li><b>email:-</b>  <?php echo $row['email']; ?></li>
                        </ul>
                        </div>
                    </ul>
                    <div class="text-dark" id="manue">
                      
                        <div class="card-body">
                        <button><a href="index.php">Logout</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- closedsidebar -->

        <!-- main content -->
        <div class=" col-sm-9 col-lg-9 col-md-9" id="mainc">
            <div class=" container row first-row" id="main">
                <div class="contener" id="today">
                    <h2><b>ALL COMPLAINTS</b></h2>
                </div>
                <table class="table table-dark table-striped" id="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">date</th>
                            <th scope="col">Comp</th>
                            <th scope="col">vname</th>
                            <th scope="col">addr</th>
                            <th scope="col">descr</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT*FROM complaintbox";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['comp']; ?></td>
                                    <td><?php echo $row['vname']; ?></td>
                                    <td><?php echo $row['addr']; ?></td>
                                    <td><?php echo $row['descr']; ?></td>
                                    <td><button onclick="this.disabled='true'">Close</button></td>

                                </tr>
                        <?php
                            }
                        } else {
                            echo "No record found";
                        }

                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- sidenavbar -->

    <!-- main contain are closed -->
</body>

</html>