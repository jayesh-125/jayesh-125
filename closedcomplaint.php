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
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Manu
                        </a>
                        <ul class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark " href="docomplaint.html">user Complaint</a></li>
                            <li><a class="dropdown-item text-dark" href="adminlogin.html">Admin login/registration</a>
                            </li>
                            <li><a class="dropdown-item text-dark" href="status.html">Status</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="about.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.html">Contact</a>
                    </li>
                </ul>
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
                        <li class="list-group-item" id="username">Usernmae</li>
                        <li class="list-group-item" id="village">village name</li>
                        <li class="list-group-item" id="contact">contact no</li>
                        <li class="list-group-item" id="email">email</li>
                    </ul>
                    <div class="text-dark" id="manue">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" id="panding"><a href="pandingcomplaint.html">pandingcomplaint</a></li>
                            <li class="list-group-item" id="closed"><a href="closedcomplaint.html">closedcomplaint</a></li>
                        </ul>
                        <div class="card-body">
                            <button class="btn">logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- closedsidebar -->
           
            <!-- main content -->
            <div class=" col-sm-9 col-lg-9 col-md-9 container" id="mainc" >
                <div class="" id="main">
                    <div class="contener" id="today"><h2><b>CLOSED COMPLAINT</b></h2></div>
                        <table class="table table-dark table-striped" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">date</th>
                                    <th scope="col">Complaint</th>
                                    <th scope="col">village</th>
                                    <th scope="col">address</th>
                                    <th scope="col">description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>01-01-2002</td>
                                  <td>aaaaa</td>
                                  <td>bbbbb</td>
                                  <td>ccccc</td>
                                  <td>dddddd</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>01-01-2002</td>
                                    <td>aaaaa</td>
                                    <td>bbbbb</td>
                                    <td>ccccc</td>
                                    <td>dddddd</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>01-01-2002</td>
                                    <td>aaaaa</td>
                                    <td>bbbbb</td>
                                    <td>ccccc</td>
                                    <td>dddddd</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>01-01-2002</td>
                                    <td>aaaaa</td>
                                    <td>bbbbb</td>
                                    <td>ccccc</td>
                                    <td>dddddd</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>01-01-2002</td>
                                    <td>aaaaa</td>
                                    <td>bbbbb</td>
                                    <td>ccccc</td>
                                    <td>dddddd</td>
                                </tr>
                              </tbody>
                            
                        </table>
                </div>
            </div>
    </div>
    <!-- sidenavbar -->
   
        <!-- main contain are closed -->
</body>

</html>