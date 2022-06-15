<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumni</title>
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/index.css" />
  </head>
  <body>
  <!-- Connect to the database -->
    <?php include('../backend/db/connect.php');?>

    <nav class="app__navbar">
      <div class="app__logo">
        <h1>State Secondary School</h1>
      </div>
      <div class="app__nav_toggler">
        <button id="navToggler">T</button>
      </div>
      <div class="app__nav_links">
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="./about.html">About Us</a></li>
          <!-- <li><a href="./register.html">Register</a></li> -->
          <li><a href="./alumni.php">Alumni</a></li>
          <li><a href="./staff.html">Staff</a></li>
          <li><a href="./contacts.html">Contact Us</a></li>
          <li><a href="./register.html">Register</a></li>
          <li><a href="./login.html">Login</a></li>
        </ul>
      </div>
    </nav>
    <!-- Links to be displayed on mobile view -->
    <div class="app__mobile_links" id="mobileLinks">
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="./about.html">About Us</a></li>

        <li><a href="./alumni.php">Alumni</a></li>
        <li><a href="./staff.html">Staff</a></li>
        <li><a href="./contacts.html">Contact Us</a></li>
        <li><a href="./register.html">Register</a></li>
        <li><a href="./login.html">Login</a></li>
      </ul>
    </div>
    <h1>Alumni</h1>

    <?php
      $query = 'SELECT * FROM alumni';
      $results = mysqli_query($connection,$query);
      $data = mysqli_fetch_assoc($results);
      echo $data;

    ?>

    <div class="app__alumni_form">
      <form action="" method="post">
        <input type="text" placeholder="Alumnus name" name="alname" id="alname>

        <p>Year of enrollment</p>
        <select name="enrol_year" id="enrolYear">
        </select>

        <p>Year of graduation</p>
        <select name="grad_year" id="gradYear"></select>

        <p>Headmaster at graduation</p>
        <select name="headmasters" id="headmasters"></select>

        <p>Famous Teacher at graduation</p>
        <select name="teachers" id="teachers"></select>

        <p>Results</p>
        <select name="results" id="results"></select>

        <input type="text" placeholder="Occupation">

        <input type="email" placeholder="Email" required>

        <input type="tel" placeholder="Mobile number" required>

        <input type="submit" value="Join">
      </form>
    </div>
    <script src="../js/index.js"></script>
    <script src="../js/alumni.js"></script>
  </body>
</html>
