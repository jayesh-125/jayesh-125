ASF<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="all.css">
  <title>Document</title>
</head>

<body>
  <!--- header start here-->
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
  <!--- footer-->
  <footer class="py-3 my-4 bg-dark">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
      <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact us</a></li>
    </ul>
  </footer>
</body>

</html>