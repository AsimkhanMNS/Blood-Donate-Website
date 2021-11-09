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
    include('style.php');
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
    <!-- PHP -->
    <?php
    if (isset($_POST["submit"])) {
        if (empty($_POST['name'] != "" && $_POST['email'] != "" && $_POST['dob'] != "" && $_POST['radio'] != "" && $_POST['age'] != "" && $_POST['select'] != "" && $_POST['selectd'] != "" && $_POST['number'] != "") ) {

            echo '<div class="alert alert-danger col-md-6 col-sm-12 alert-dismissible fade show" role="alert">
            <h3 class="hea"><i class="fas fa-exclamation-triangle fa-2x" style="color: red;"></i></h3>
            <h4 class="hea">Not Register Your Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else {
            echo '<div class="alert alert-success col-md-6 col-sm-12  alert-dismissible fade show" role="alert">
            <h3 class="hea"><i class="fas fa-check-circle fa-2x" style="color: green;"></i></h3>
            <h4 class="hea">Successfully Register Your Details</h4>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    ?>
    <!-- IMAGE -->
    <div class="text-center mt-5 mb-1 ">
        <img src="image/register.png" class="rounded" alt="Register" width="400px" height="400px">
    </div>
    <!-- HEADING -->
    <h1 class="head">Register Your Details</h1>
    <div class="linend"></div>
    <!-- PHP -->
    <?php
    include('connect.php');
    error_reporting(0);
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["radio"];
    $age = $_POST["age"];
    $district = $_POST["selectd"];
    $bloodgrp = $_POST["select"];
    $number = $_POST["number"];
    $check = "SELECT * FROM register WHERE name = '$name' AND email = '$email' AND dob = '$dob' AND gender = '$gender' AND age = '$age' AND district = '$district' AND bloodgrp = '$bloodgrp' AND number = '$number'";
    $checks = mysqli_query($connection, $check);
    $du = mysqli_fetch_array($checks, MYSQLI_NUM);
    if (isset($_POST["submit"])) {
        if (empty($_POST['name'] != null && $_POST['email'] != null && $_POST['dob'] != null && $_POST['radio'] != null && $_POST['age'] != null && $_POST['select'] != null && $_POST['selectd'] != null && $_POST['number'] != null)) {
            echo null;
        } else {
            if ($du[0] > 1) {
                echo '<div class="container">
                <div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle " style="color: red;"></i>&nbsp;
                This user details already register
              </div>
              </div>';
            } else {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $dob = $_POST["dob"];
                $gender = $_POST["radio"];
                $age = $_POST["age"];
                $district = $_POST["selectd"];
                $bloodgrp = $_POST["select"];
                $number = $_POST["number"];
                $insertquery = "INSERT INTO `register` (`name`,`email`,`dob`,`gender`,`age`,`district`,`bloodgrp`,`number`) VALUES ('$name','$email','$dob','$gender','$age','$district','$bloodgrp','$number')";;
                mysqli_query($connection, $insertquery);;
            }
        }
    }
    ?>
    <!-- REGISTER -->
    <div class="container mt-4">
        <form method="post">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <div class="linen"></div>
            <div class="mb-3 mt-1">
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
            </div>
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <div class="linen"></div>
            <div class="mb-3 mt-1">
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email">
            </div>
            <label for="exampleFormControlInput1" class="form-label">Date Of Birth</label>
            <div class="lines"></div>
            <div class="mb-3 mt-1">
                <input type="date" name="dob" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your DOB">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-2">Gender</label>
                <div class="lineg "></div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" value="Male" name="radio" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="Female" type="radio" name="radio" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
            </div>
            <label for="exampleFormControlInput1" class="form-label mb-2">Age</label>
            <div class="linea  "></div>
            <div class="mb-3">
                <input type="text" class="form-control" name="age" id="exampleFormControlInput1" placeholder="Enter Your Age">
            </div>
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
            <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
            <div class="linem mb-2"></div>
            <div class="mb-3 mt-1">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Number" name="number">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-danger mb-3" name="submit">REGISTER</button>
            </div>
        </form>
    </div>
    <!-- FOOTER -->
    <div class="foot pt-3 pb-2">
        <h3 class="f">DONATE BLOOD! SAVE LIFE! </h3>
        <hr>
        <h5 class="c">&copy; Created And Designed By <a href="home.php" class="copy">Mnstech</a></h5>
    </div>
    <!-- Bootstrap JavaScript  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>