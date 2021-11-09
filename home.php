<!doctype html>
<html lang="en">

<head>
  <title>Blood-Donate</title>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- FAVICON -->
  <link rel="shortcut icon" href="https://cdn.iconscout.com/icon/premium/png-512-thumb/blood-donate-3099314-2578701.png" type="image/x-icon">
  <!-- ICONS -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- CSS -->
  <?php
  include('style.php')
  ?>

</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/blood-donate-3099314-2578701.png" alt="" width="50" height="50" class="d-inline-block align-text-center">
        Blood-Donate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class='fas fa-align-justify'></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <hr>
        <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
          <li class="nav-item pe-4">
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <div class="hover"></div>
          <li class="nav-item pe-4">
            <a class="nav-link  active" href="register.php">Register</a>
          </li>
          <li class="nav-item  pe-4">
            <a class="nav-link  active" href="finddonars.php">Find Donars</a>
          </li>
          <li class="nav-item pe-4">
            <a class="nav-link  active" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- CARD -->
  <div class="row mt-3 mb-4 me-1 ms-1">
    <div class="col-sm-12 col-md-6">
      <div class="card">
        <div class="card-body">
          <h3 class="heas"><i class="fas fa-heartbeat fa-4x" style="color: #dc143c;transition:transform .3s"></i></h3>
          <h4 class="heas mt-1 mb-1">
            <?php
            include('connect.php');
            $records = mysqli_query($connection, "select * from completed");
            while ($data = mysqli_fetch_array($records)) {
              echo $data['slife'];
            }
            ?></h4>
          <h4 class="heas">SAVE LIFE</h4>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="card">
        <div class="card-body">
          <h3 class="heas"><i class="fas fa-address-card fa-4x" style="color: #dc143c;transition:transform .3s"></i></h3>
          <h4 class="heas mt-1 mb-1">
            <?php
            include('connect.php');
            $records = mysqli_query($connection, "select * from completed");
            while ($data = mysqli_fetch_array($records)) {
              echo $data['hdonars'];
            }
            ?></h4>
          <h4 class="heas">HAPPY DONARS</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- DONATE PROCEDURE HEADING-->
  <h4 class="heasd">BLOOD DONATE PROCESS</h4>
  <div class="linend mb-2"></div>
  <!-- DONATE PROCEDURE -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 ">
        <div class="mb-2">
          <h4 class="hw">STEP-1</h4>
          <p class="bor">Day before<span class="de"> HYDRATE </span>Increase your fluids the day before donating</p>
        </div>
        <div class="mb-2">
          <h4 class="hw">STEP-2</h4>
          <p class="bor">Evening before<span class="de"> EAT SALTY SNACKS </span>Increase you salt intake the evening before donating</p>
        </div>
        <div class="mb-2">
          <h4 class="hw">STEP-3</h4>
          <p class="bor">Night before<span class="de"> GET SLEEP </span>Get a good night's sleep prior to donation day</p>
        </div>
        <div class="mb-2">
          <h4 class="hw">STEP-4</h4>
          <p class="bor">Morning of<span class="de"> EAT BREAKFAST </span>Eat a well balanced breakfast the morning of your donation</p>
        </div>
        <div class="mb-2">
          <h4 class="hw">STEP-5</h4>
          <p class="bor">Right before<span class="de"> HYDRATE </span>Drink water right before your donation</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <img src="image/donation.png" class="rounded" alt="Donate" width="100%" height="100%">
      </div>
    </div>
    <h4 class="heasd">AFTER YOUR DONATION</h4>
    <div class="linend mb-2"></div>
    <p class="tr">When you donate blood you lose some iron we recommended that you take a multivitamin with iron or an iron supplement to replace it</p>
  </div>
  <!-- FOOTER -->
  <div class="foot pt-3 pb-2">
    <h3 class="f">DONATE BLOOD! SAVE LIFE! </h3>
    <hr>
    <h5 class="c">&copy; Created And Designed By <a href="home.php" class="copy">Mnstech</a></h5>
  </div>
  <!-- Bootstrap JavaScript  -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>