


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="all.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <h3><b>VGRS</b></h3>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href=" #" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Manu
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
    </nav>
        <!-- registration -->
      
    <div class="row">
        <!-- add complaint -->
        <div class="container col-md-5 col-sm-5 col-lg-5" id="adr">
            <h2><b>USER REGISTRATION</b></h2>
            <form class=" container" action="demo.php" method="POST">
                <div class="">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="">
                    <label for="phoneno" class="form-label">Phone No </label>
                    <input type="tel" class="form-control" name="phoneno" id="phoneno">

                </div>
                <div class="">
                    <label for="village" class="form-label">VILLAGE</label>
                    <input type="text" class="form-control" name="village" id="village">
                </div>

                <div class="">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                
                <div class="">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="">
                    <label for="cpassword" class="form-label"> conform password</label>
                    <input type="password" class="form-control" name="cpassword" id="cpassword">
                </div>
                <br>
                <div class="row g-3">
                    <div class="col-md-3"><button type="reset" class="btn" name="sub" id="lg">reset</button></div><br>
                    <div class="col-md-3"> <button  type="submit" class="btn" id="lg">SAVE</button></div>
                </div>
                <br>
            </form>
        </div>
        <!-- status check -->
    </div>
     

    <!--- footer-->
    <footer class="py-3 my-4 bg-dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Contact us</a></li>
        </ul>
    </footer>

</body>

</html>