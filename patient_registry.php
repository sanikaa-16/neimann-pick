<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font awesome -->
     <script src="https://kit.fontawesome.com/3cea8c81f8.js" crossorigin="anonymous"></script>
    
     <!-- google fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
 
     <!-- Custom styling -->
     <link rel="stylesheet" href="donatestyle.css">
     <link rel="stylesheet" href="style.css">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Patient registry</title>
</head>
<body>
    <!--navigation-->
 <header>
  <div class="logo text-dark">
    <a href="index.html">
    <img src="Logo Yellow BG.jpg" alt="Niemann-pick India Logo" width="500" height="100" />
  </a>
  </div>

  <i class="fa fa-bars menu-toggle text-dark"></i>
  <ul class="nav text-dark">
    <li><a href="aboutus.html" class="text-decoration-none text-dark">
      <i class=" text-dark" style="font-size: .8em;"></i>
      ABOUT US</a>
  </li>
    <li><a href="#" class="text-decoration-none text-dark">
        <i class="fa fa-chevron-down text-dark" style="font-size: .8em;"></i>
        FAMILY SUPPORT</a>
      <div class="background">
        <ul class="text-decoration-none text-dark">
          <li><a href="#">PATIENT REGISTRY</a></li>
          <li><a href="#">MEMEBER REGISTRY</a></li>
          <li><a href="#">CENTER OF EXCELLENCE</a></li>
          <li><a href="support.html">CARE AND SUPPORT</a></li>
        </ul>
      </div>
    </li>
    <li><a href="disease.html" class="text-decoration-none text-dark">
        <i class=" text-dark" style="font-size: .8em;"></i>
        ABOUT NPD</a>
    </li>
    <li><a href="#" class="text-decoration-none text-dark">
        <i class="text-dark" style="font-size: .8em;"></i>
        PATIENT REGISTRY</a>

    </li>
    <li><a class="text-decoration-none text-dark" href="https://niemannpickindia.com/donate.php">
        DONATE
      </a>

    </li>

    </li>
  </ul>

</header>

<div class="division m-0 text-end">.</div>

<div class="container thank-you text-dark display-6 pt-3">Register here as a patient and join our community!</div>
<div class="container more text-dark">Kindly request to fill all the columns for data to be stored successfully, if not applicable put a - or write NA in the given space below.</div>
    <!-- DONATION FORM -->
    
    <form class="container" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group pt-3">
          <label>Patient's Name</label>
          <input type="text" class="form-control"  name="pname">
        </div>
        <div class="form-group">
          <label>Mother's name</label>
          <input type="text" class="form-control" name="mname">
        </div>
        <div class="form-group">
            <label>Father's name</label>
            <input type="text" class="form-control" name="fname">
          </div>
          <div class="form-group">
            <label>Date of birth of patient: </label>
            <input type="date" class="form-control" name="dob">
            <small id="dob" class="form-text text-muted">enter in the format YYYY-MM-DD</small>
          </div>
          <div class="form-group">
            <label>age of patient: </label>
            <input type="number" class="form-control" name="age">
          </div>
          <div class="form-group">
            <label>present weight of patient: </label>
            <input type="number" class="form-control" name="weight">
          </div>
          <div class="form-group">
            <label>Email address </label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
          </div>
          <div class="form-group">
            <label>  Phone number </label>
            <input type="number" class="form-control" placeholder="Enter number with country code" name="phone">
          </div>
          <div class="form-group">
            <label>address</label>
            <input type="text" class="form-control" name="address">
          </div>
          <div class="form-group">
            <label>city</label>
            <input type="text" class="form-control"  name="city">
          </div>
          <div class="form-group">
            <label>state</label>
            <input type="text" class="form-control" name="state">
          </div>
          <div class="form-group">
            <label>country</label>
            <input type="text" class="form-control" name="country">
          </div>
          <div class="form-group">
            <label>Pin code</label>
            <input type="number" class="form-control" name="pincode">
          </div>
          <div class="form-group">
            <label>Any Doctor treating the patient?</label>
            <input type="text" class="form-control" placeholder="specify name of doctor and specialization" name="doctor">
          </div>
          <div class="form-group">
            <label>Name of hospital</label>
            <input type="text" class="form-control" name="hospital">
          </div>
          <div class="form-group">
            <label>ERT status</label>
            <input type="text" class="form-control" name="ert_status">
          </div>
          <div class="form-group">
            <label>ERT Start Date</label>
            <input type="date" class="form-control" placeholder="Enter in YYYY-MM-DD form" name="ert_date">
          </div>
          <div class="form-group">
            <label>Diagnosed Age</label>
            <input type="number" class="form-control" name="diagnosed_age">
          </div>
          <div class="form-group">
            <label>Any Symptoms?</label>
            <input type="text" class="form-control" name="symptoms">
          </div>
          <div class="form-group">
            <label>Any medical challemges faced?</label>
            <input type="text" class="form-control" name="medical_challenges">
          </div>
          <div class="form-group">
                <label for="message">Any other information you would like to disclose?</label>
                <input type="text" class="form-control" name="message">
              </div>


              <button type="submit" class="submit btn btn-primary" value="register">Submit</button>
      </form>

       <!-- THREAD BREAK2 -->
 <div class="break">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="texts3 text-center display-6 text-dark">Supporting One Another. Supporting Our Community.</div>
      </div>
    </div>
    <div class="row gift1">
      <div class="col-sm text-center">
        <a href="https://niemannpickindia.com/donate.php" class="btn donate text-light btn-dark btn-lg">DONATE</a>
      </div>
      <div class="col-sm text-center">
        <div class="btn donate text-light btn-dark btn-lg">PATIENT REGISTRY</div>
      </div>
      <div class="col-sm text-center">
        <div class="btn donate text-light btn-dark btn-lg">MEMBER REGISTRY</div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- FOOTER -->
<div>
  <footer class="text-center text-white" style="background-color: #1e89b7">
    <!-- Grid container -->
    <div>
      <!-- Section: Links -->
      <section>
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="aboutus.html" class="text-light text-decoration-none">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="disease.html" class="text-light text-decoration-none">ABOUT NPD</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="https://niemannpickindia.com/donate.php" class="text-light text-decoration-none">Donate</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-light text-decoration-none">Patient registry</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-light text-decoration-none">Contact us</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Niemannpickindia.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->










<!-- J query -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom script -->
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the SQL statement
    $sql = "INSERT INTO patient_info (pname, mname, fname, dob, age, weight, email, phone, address, city, state, country, pincode, doctor, hospital, ert_status, ert_date, diagnosed_age, symptoms, medical_challenges, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssssss", $pname, $mname, $fname, $dob, $age, $weight, $email, $phone, $address, $city, $state, $country, $pincode, $doctor, $hospital, $ert_status, $ert_date, $diagnosed_age, $symptoms, $medical_challenges, $message);

    // Set parameters and execute
    $pname = $_POST["pname"];
    $mname = $_POST["mname"];
    $fname = $_POST["fname"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $weight = $_POST["weight"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $pincode = $_POST["pincode"];
    $doctor = $_POST["doctor"];
    $hospital = $_POST["hospital"];
    $ert_status = $_POST["ert_status"];
    $ert_date = $_POST["ert_date"];
    $diagnosed_age = $_POST["diagnosed_age"];
    $symptoms = $_POST["symptoms"];
    $medical_challenges = $_POST["medical_challenges"];
    $message = $_POST["message"];

    if ($stmt->execute()) {
        echo "Your data has been saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
    ?>
