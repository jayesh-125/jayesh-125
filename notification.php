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


<!doctype html>
<html lang="en">

<head>
  <title>User_data</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="all.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <?php
  $sql = "SELECT*FROM complaintbox ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <div class="card mb-3 container" id="noti" style="max-width: 300px;">
        <div class="col-md-8"></div>
        <div class="card-body">
          <h3 class="card-title"><b>your complaint has been added successfull..</b></h3>
          complaint ID: <?php echo $row['id']; ?><br>
          complaint TYPE: <?php echo $row['comp']; ?><br>
          complaint DATE:<?php echo $row['date']; ?><br>
          _go to homepage..<button><a href="index.php">click</a></button>
        </div>
      </div>
  <?php
    }
  } else {
    echo "No record found";
  }
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>