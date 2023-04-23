<!DOCTYPE html>
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

  <!--- header ends here-->


  <!-- abut this system -->
  <div class="row">
    <div class="container col-md-7 col-sm-7 col-lg-7" id="about">
      <div class="about">
        <!---terms&condition card-->
        <h2> About</h2>
        <ul>
          <h5>:-for comman user-:</h5>
          <li>
            <i>this site use to kindly help of Villages peopel</i>
          </li>
          <li>
            <i>If any problem(grievance) related seen cards in home page then very usefull this site </i>
          </li>
          <i><b>:-process-:</b></i>
          <li><i>click complain box and fill details <strong>*note</strong>(in address: village Word
              number put in address and your adreess, two details put in address) </i></li>
          <li><i>for proof photo fill fin file formate(jpg,png,pdf)</i></li>
          <li><i>submit this complain</i></li>
          <li><b><i><strong>warning</strong> </b> admin login not use comman user</i></li>
          <li><i>generated complain id and complain date throw check your complain status</i></li>
          <li><i>after redressal your problem the give report in site</i></li>
          <li><i>report give in status page</i></li>
        </ul>
        <div class="">
          <ul>
            <h5>:-for admin user-:</h5>
            <li><i> this use for only talati/sarpach etc related gram panchayat this contact give in contact us page</i>
            </li>
            <li><i>admin user receive complain and process be continue and complate solution after report send</i></li>

          </ul>
        </div>
      </div>
    </div>
    <!-- about this sysyem end -->
    <!-- card start -->
    <div class="container col-md-4 col-sm-4 col-lg-4">
      <div>
        <div class="about">
          <!-- card / body of site-->
          <div class="row">
            <br>

            <div class="card mb-3  container" style="max-width: 540px;" id="abcard">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="roadproblem.jpg" class="img-fluid rounded-start" id="problem" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><b>Road Problem</b></h5>
                    <p class="card-text"><i>In village related road problem ,like ruff road in not run
                        vehical,some word
                        in not making simpleroad(sheri),pakki sadak etc,then doing complain in this
                        box.</i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="card mb-3 container" style="max-width: 540px;" id="abcard">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="waterproblem.jpg" class="img-fluid rounded-start" id="problem" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><b>water problem</b></h5>
                    <p class="card-text"><i>In Village any problem related to water,like long time t not
                        coming
                        water,personal water line,not any rever water gives you then doing complain in
                        this box.</i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="row">
    <div class="card col-lg-4 col-md-4 col-sm-4 mb-3 container"  id="bottom" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="sewerproblem.jpg" class="img-fluid rounded-start" id="problem" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><b>Sewer Problem</b></h5>
            <p class="card-text"><i>In village not giving sewer line & if roots in sewer pipe ,crushed
                or disconnect sewer pipe ,sewer gas inside house this are after sewer line gives problem box.</i></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card col-lg-3 col-md-3 col-sm-3 mb-3 container" id="bottom" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="pollutionproblem.jpg" class="img-fluid rounded-start" id="problem" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><b>Polution Problem</b></h5>
            <p class="card-text"><i>In Village any problem related to polution, like trash,dust in
                air,if sewer pipe crash,then doing complain in this box.</i>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card col-lg-4 col-md-4 col-sm-4 mb-3 container"  id="bottom" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="electricotyproblem.jpg" class="img-fluid rounded-start" id="problem" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><b>Electricity Problem</b></h5>
            <p class="card-text"><i>In village any Electricity related problem ,regular light not comming ,some vire break in village power station,street light not providied
                continue, doing complain in box.</i>
            </p>
          </div>
        </div>
      </div>
    </div>
   </div>
    <!-- card end -->
  </div>
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