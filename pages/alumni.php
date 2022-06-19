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
  <body id="alumniPage">
  <!-- Connect to the database -->
    <?php 
    include('../backend/db/connect.php');

    session_start();
  // require user to login if logged out
    if(!isset($_SESSION['email'])){
        header('location:http://localhost/web-project/pages/login.html');
    }
    ?>

    <nav class="app__navbar">
      <div class="app__logo">
      <h1>Vecna <span class="mobile_hide">Secondary School</span></h1>

      </div>
      <div class="app__nav_toggler">
      <img src="../assets/icons/menu.png" alt="Nav icon" id="navToggler">
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
         <li><a href="../backend/auth/logout.php">Logout</a></li>
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
        <li><a href="../backend/auth/logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- <h1>Alumni</h1> -->


    <div class="app__alumni_container" id="alumniForm">
      <form action="../backend/alumni.php" method="post" class="app__alumni_form">

        
        <input type="text" placeholder="Alumnus name" name="alname" id="alname"/>

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

        <input type="text" placeholder="Occupation" name="occupation">

        <input type="email" placeholder="Email" required name="email">

        <input type="text" name="address" placeholder="Address"/>

        <input type="tel" placeholder="Mobile number" name="tel" required>

        <input type="submit" value="Join">
      </form>
    </div>

    <div class="app__alumni_list" id="alumniTable">
      <table border="1">
        <caption>Alumni at Vecna Secondary</caption>
        <tr>
          <th>Alumnus Name</th>
          <th>Year of Enrollemnt</th>
          <th>Year of Graduation</th>
          <th>Headmaster</th>
          <th>Famous Teacher</th>
          <th>Results</th>
          <th>Occupation</th>
          <th>Address</th>
          <th>Email</th>
          <th>Mobile Number</th>
          
        </tr>
        <?php
          $query = 'SELECT * FROM alumni';
          $results = mysqli_query($connection,$query);

          if($results){ 
            while($data = mysqli_fetch_assoc($results)){
        
       
              ?>
              <tr>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['enrol_year'];?></td>
                <td><?php echo $data['grad_year'];?></td>
                <td><?php echo $data['headmaster'];?></td>
                <td><?php echo $data['famous_teacher'];?></td>
                <td><?php echo $data['results'];?></td>
                <td><?php echo $data['occupation'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['mob_number'];?></td>
              </tr>

            <?php 
          }
          }else{
            echo "No alumni";
          }
        ?>
      </table>
    <p class="para">Are you an alumni? <a type="button" id="alumniBtn">Join Here</a></p>   

    </div>
    <script src="../js/index.js"></script>
    <script src="../js/alumni.js"></script>
  </body>
</html>
