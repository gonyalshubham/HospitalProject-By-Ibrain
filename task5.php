<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitalDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
  input[type=submit]{

    margin: 20px 700px;
  }

    ul {
        margin: 0px;
        padding: 0px;
    }
    .footer-section {
      background: #151414;
      position: relative;
    }
    .footer-cta {
      border-bottom: 1px solid #373636;
    }
    .single-cta i {
      color: #ff5e14;
      font-size: 30px;
      float: left;
      margin-top: 8px;
    }
    .cta-text {
      padding-left: 15px;
      display: inline-block;
    }
    .cta-text h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 2px;
    }
    .cta-text span {
      color: #757575;
      font-size: 15px;
    }
    .copyright-area{
      background: #202020;
      padding: 25px 0;
    }
    .copyright-text p {
      margin: 0;
      font-size: 14px;
      color: #878787;
    }
    .copyright-text p a{
      color: #ff5e14;
    }
    .footer-menu li {
      display: inline-block;
      margin-left: 20px;
    }
    .footer-menu li:hover a{
      color: #ff5e14;
    }
    .footer-menu li a {
      font-size: 14px;
      color: #878787;
    }

  </style>

</head>
<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">HOSPITAL 24|7</a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">MEDICINE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">HEALTH ADVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>
    </ul>

      <form class="form-inline" action="index.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">x
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
  <br>




  <div class="container-fluid">
    <h1 style="text-align:center">DELETE & DROP :</h1>
    <form action="task5.php" method="POST">
    <input type="submit" class="btn btn-info" name="delete" role="button"  value="DELETE" />
  </form>
</div>

    <div class="container">

  <table class="table table-bordered table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">PAT ID</th>
        <th scope="col">appid</th>
        <th scope="col">appdate</th>
        <th scope="col">operatory</th>
        <th scope="col">provider</th>
        <th scope="col">apptime</th>
        <th scope="col">applength</th>
        <th scope="col">amount</th>
        <th scope="col">clinicid</th>

      </tr>
    </thead>
    <tbody>
      <?php
      // Create database
      $sql = "select * from appointmentinfo";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {


        echo  '<tr>';

          echo "<td>" .  $row["patid"]. "</td><td>" . $row["apptid"]. "</td><td>" . $row["apptdate"] . "</td> <td> ". $row["operatory"] . "</td> <td> " . $row["provider"]. "</td> <td>" . $row["appttime"]. "</td> <td>". $row["apptlength"] . "</td> <td> " . $row["amount"]. "</td> <td>" .$row["clinicid"].  "</td>";

          echo '</tr>';
        }

      } else {
        echo "0 results";
      }

      if(isset($_POST['delete'])){
        $sql1 = "DELETE FROM appointmentinfo WHERE amount<=50 ";
        $result1 = $conn->query($sql1);
            echo "<meta http-equiv = 'refresh' content = '1; url = task5.php' />";

    }

    else{


    }

      ?>


    </tbody>
  </table>
</div><br><br>
<div class="container-fluid">
<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>999999999</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                       <div class="footer-widget">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>gonyalshubham@.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2018, All Right Reserved <a href="">gonyalshubham</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>



</body>
</html>



<?php


$conn->close();

?>
