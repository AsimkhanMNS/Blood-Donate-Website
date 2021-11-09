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
  <!-- IMAGE -->
  <div class="text-center mt-5 mb-1 ">
    <img src="image/blood.png" class="rounded" alt="Register" width="400px" height="400px">
  </div>
  <!-- HEADING -->
  <h1 class="head">Find Donars</h1>
  <div class="linend"></div>
  <!-- REGISTER -->
  <div class="container mt-4">
    <form method="post">
      <label for="exampleFormControlInput1" class="form-label mb-2">District</label>
      <div class="lined"></div>
      <div class="mb-3">
        <select class="form-select " aria-label="Default select example" name="selectd">
          <option selected>Select District</option>
          <option value="Ariyalur">Ariyalur</option>
          <option value="Chennai">Chennai</option>
          <option value="Coimbatore">Coimbatore</option>
          <option value="Cuddalore">Cuddalore</option>
          <option value="Dharmapuri">Dharmapuri</option>
          <option value="Dindigul">Dindigul</option>
          <option value="Erode">Erode</option>
          <option value="Kancheepuram">Kancheepuram</option>
          <option value="Kanniyakumari">Kanniyakumari</option>
          <option value="Karur">Karur</option>
          <option value="Krishnagiri">Krishnagiri</option>
          <option value="Madurai">Madurai</option>
          <option value="Nagapattinam">Nagapattinam</option>
          <option value="Nammakkal">Nammakkal</option>
          <option value="Nilgiris">Nilgiris</option>
          <option value="Perambalur">Perambalur</option>
          <option value="Pudukkottai">Pudukkottai</option>
          <option value="Ramanathapuram">Ramanathapuram</option>
          <option value="Salem">Salem</option>
          <option value="Sivagangai">Sivagangai</option>
          <option value="Thanjavur">Thanjavur</option>
          <option value="Theni">Theni</option>
          <option value="Thirichirappalli">Thirichirappalli</option>
          <option value="Thiruvarur">Thiruvarur</option>
          <option value="Tirunelveli">Tirunelveli</option>
          <option value="Tirupur">Tirupur</option>
          <option value="Tiruvallur">Tiruvallur</option>
          <option value="Tenkasi">Tenkasi</option>
          <option value="Tiruvannamalai">Tiruvannamalai</option>
          <option value="Tuticorin">Tuticorin</option>
          <option value="Vellore">Vellore</option>
          <option value="Villupuram">Villupuram</option>
          <option value="Virudhunagar">Virudhunagar</option>

        </select>
      </div>
      <label for="exampleFormControlInput1" class="form-label mb-2">Blood Group</label>
      <div class="lineb"></div>
      <div class="mb-3">
        <select class="form-select " aria-label="Default select example" name="select">
          <option selected>Select Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="A1+">A1+</option>
          <option value="A1-">A1-</option>
          <option value="A1B+">A1B+</option>
          <option value="A1B-">A1B-</option>
          <option value="A2+">A2+</option>
          <option value="A2-">A2-</option>
          <option value="A2B+">A2B+</option>
          <option value="A2B-">A2B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-danger mb-3" name="submit">FIND DONARS</button>
      </div>
    </form>
  </div>
  <!-- TABLE -->
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered border-danger table-striped">
        <thead class="table-danger">
          <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DOB</th>
            <th>GENDER</th>
            <th>AGE</th>
            <th>DISTRICT</th>
            <th>BLOOD GROUP</th>
            <th>NUMBER</th>
          </tr>
        <tbody>
          <?php
          error_reporting(0);
          include('connect.php');
          $showRecordPerPage = 10;
          if (isset($_GET['page']) && !empty($_GET['page'])) {
            $currentPage = $_GET['page'];
          } else {
            $currentPage = 1;
          }
          $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
          $lastPage = ceil($totalEmployee / $showRecordPerPage);
          $firstPage = 1;
          $nextPage = $currentPage + 1;
          $previousPage = $currentPage - 1;
          $district = $_POST["selectd"];
          $bloodgrp = $_POST["select"];
          $sql = "SELECT * FROM register WHERE district LIKE '%{$district}%' AND bloodgrp LIKE '%{$bloodgrp}%' LIMIT $startFrom, $showRecordPerPage ";
          $result = $connection->query($sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr>
         <td>" . $row["name"] . "</td>
         <td>" . $row["email"] . "</td>
         <td>" . $row["dob"] . "</td>
         <td>" . $row["gender"] . "</td>
         <td>" . $row["age"] . "</td>
         <td>" . $row["district"] . "</td>
         <td>" . $row["bloodgrp"] . "</td>
         <td>" . $row["number"] . "</td>
          </tr>  ";
            }
          } else {
            echo '<h4 class="heasd">SORRY! NO RESULT</h4>';
          }
          ?>
        </tbody>
        </tbody>
      </table>
    </div>
  </div>
  <!-- PAGINATION -->
  <nav aria-label="Page navigation">
    <ul class="pagination  justify-content-center">
      <?php if ($currentPage != $firstPage) { ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
            <span aria-hidden="true">PREVIOUS</span>
          </a>
        </li>
      <?php } ?>
      <?php if ($currentPage >= 2) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
      <?php } ?>
      <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
      <?php if ($currentPage != $lastPage) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
        <li class="page-item">
          <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
            <span aria-hidden="true">NEXT</span>
          </a>
        </li>
      <?php } ?>
    </ul>
  </nav>
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