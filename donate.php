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
    <title>Donate</title>
</head>
<body>
 <!-- NAVIGATION BAR -->
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

<div class="container thank-you text-dark display-6 pt-3">Thank you for your gift!</div>
<div class="container more text-dark">Your donation is greatly appreciated.
    Contributions support programs and services for Niemann-Pick families.</div>
    <!-- DONATION FORM -->
    
    <form class="container" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group pt-3">
          <label>  Donation Amount *</label>
          <input type="number" class="form-control" placeholder="Enter amount in numbers" name="amount">
        </div>
        <div class="form-group">
          <label>First Name *</label>
          <input type="text" class="form-control" name="fname">
        </div>
        <div class="form-group">
            <label>Last Name *</label>
            <input type="text" class="form-control" name="lname">
          </div>
          <div class="form-group">
            <label>Email address *</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label>  Phone number </label>
            <input type="number" class="form-control" placeholder="Enter number with country code" name="phone">
          </div>
          <div class="form-group">
                <label for="message">Any message</label>
                <input type="text" class="form-control" name="message">
              </div>


              <button type="submit" class="submit btn btn-primary" value="register">Go to RazorPay</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom script -->
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
  crossorigin="anonymous"></script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>

</html>





<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $amount = filter_input(INPUT_POST, "amount", FILTER_SANITIZE_SPECIAL_CHARS);
      $fname = filter_input(INPUT_POST, "fname", FILTER_SANITIZE_SPECIAL_CHARS);
      $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
      $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
      $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);
  
      if (empty($amount)) {
          echo "Please enter an amount";
      } else if (empty($fname)) {
          echo "Please enter your first name";
      } else if (empty($lname)) {
          echo "Please enter your last name";
      } else if (empty($email)) {
          echo "Please enter your email";
      } else {
          $sql = "INSERT INTO donate_info(amount, fname, lname, email, phone, message)
           VALUES ('$amount','$fname','$lname','$email','$phone','$message')";
            if (mysqli_query($conn, $sql)) {
              echo "Your data has been saved successfully!";
          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      }
  }
  
    mysqli_close($conn);
    ?>
