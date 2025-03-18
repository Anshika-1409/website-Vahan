<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VAHAN - Booking</title>
    <link rel="stylesheet" href="signup2.css" />
    <!-- Google Fonts Link for Bungee Shade -->
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet" />
    <style type="text/css">

      .logo {
        font-family: "Bungee Shade", cursive;
        font-size: 5rem;
      }
    </style>
  </head>
  <body>
  
    <div class="header">
      <div class="logo-container">
        <div class="logo">VAHAN</div>
        <div class="subtitle">Compare, Choose, and Ride Smart!</div>
      </div>
      <div class="menu-icon" id="menuToggle">☰</div>
    </div>

    <!-- Navigation Bar -->
    <nav class="nav-container" >
      <ul class="nav-menu" id="navMenu">
        <li><a href="#" class="active">Home</a></li>
        <li>
          <a href="#" class="nav-link">My Rides 
          <i class="fas fa-angle-down"></i></a>
          <div class="dropdown-menu">
            <a href="#">Current Ride</a>
            <a href="#">Ride History</a>
            <a href="#">Schedule a Ride</a>
            <a href="#">Saved Routes</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link">Help <i class="fas fa-angle-down"></i></a>
          <div class="dropdown-menu">
            <a href="#">FAQ</a>
            <a href="#">Contact Support</a>
            <a href="#">Report an Issue</a>
            <a href="#">Safety Tips</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link"
            >Notifications <i class="fas fa-angle-down"></i
          ></a>
          <div class="dropdown-menu">
            <a href="#">Unread</a>
            <a href="#">Promotions</a>
            <a href="#">Updates</a>
            <a href="#">Settings</a>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link"
            >Settings <i class="fas fa-angle-down"></i
          ></a>
          <div class="dropdown-menu">
            <a href="#">Profile</a>
            <a href="#">Payment Methods</a>
            <a href="#">Privacy</a>
            <a href="#">Preferences</a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- <div class="banner-img">
      <img
        src="/images/image 5 (1).png"
        alt="Transportation vehicles including bus, auto rickshaw, and taxi"
      />
    </div> -->

    <div class="page-container">
      <div class="signup-header">
        <h1>Create Your Account</h1>
        <p>Join VAHAN for seamless transportation</p>
      </div>

      <form method="POST">
        <div class="form-container">
          <div class="form-group">
            <label>Name :</label>
            <input type="text" placeholder="Enter your name" name="name" />
          </div>
          <div class="form-group">
            <label>Phone No. :</label>
            <input type="tel" placeholder="Enter your phone number" name="phn_no"/>
          </div>
          <div class="form-group">
            <label>Gender :</label>
            <select name="gender">
              <option value="" disabled selected>Select gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
              <option value="prefer-not-to-say">Prefer not to say</option>
            </select>
          </div>
          <div class="form-group">
            <label>E-Mail :</label>
            <input type="email" placeholder="Enter your email" name="email" />
          </div>
          <div class="form-group">
            <label>Password :</label>
            <input type="password" placeholder="Create password" name="pass"/>
          </div>
        </div>

        <a href="profile.html" style="text-decoration: none;"><input type="submit" class="btn" value="SIGN UP" name="sb"/></a>
      </form>  

      <div class="login-link">
        <span>Already a User?</span>
        <a href="login.html">Log In</a>
      </div>
    </div>

    <div class="footer">
      <div class="social-icons">
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fas fa-envelope"></i></span>
        <span><i class="fab fa-twitter"></i></span>
        <span><i class="fab fa-facebook"></i></span>
      </div>
      <div class="footer-links">
        <a href="#">Terms & Conditions</a>
        <a href="#">Privacy Policy</a>
        <a href="#">About Us</a>
        <a href="#">Careers</a>
      </div>
      <div class="copyright">
        © 2025 VAHAN Transportation. All Rights Reserved.
      </div>
    </div>

    <script>
      // JavaScript for mobile menu toggle
      document
        .getElementById("menuToggle")
        .addEventListener("click", function () {
          document.getElementById("navMenu").classList.toggle("active");
        });

      // JavaScript for dropdown menus
      const navLinks = document.querySelectorAll(".nav-link");
      navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
          if (window.innerWidth <= 768) {
            e.preventDefault();
            this.nextElementSibling.classList.toggle("show");
          }
        });
      });
    </script>

    <?php
      $con = mysqli_connect('localhost','root','<your password>','vahan','3306');
      if(!$con){
        die("could not connect".mysqli_connect_error());
      }
      if(isset($_POST['sb'])) 
      {   
          $name=$_POST['name'];
          $phone_no=$_POST['phn_no'];
          $gender=$_POST['gender'];
          $email=$_POST['email'];
          $password=$_POST['pass'];

        $query="INSERT INTO signup (Name,Phone,Gender,Email,Password) VALUES('$name','$phone_no','$gender','$email','$password');";

        $execute=mysqli_query($con,$query);
        echo "<script>window.location.href='profile.html';</script>";


      }

      ?>
  </body>
</html>
