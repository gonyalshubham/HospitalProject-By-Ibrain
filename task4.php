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

<div class="container">
    <h1 style="text-align:center">OverallView :</h1>
<table class="table table-bordered table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ClinicId</th>
      <th scope="col">Year</th>
      <th scope="col">Month</th>
      <th scope="col">Proceduretype</th>
      <th scope="col">Count</th>


    </tr>
  </thead>
  <tbody>
    <?php
    // Create database
   $year_1 = date("Y")+1;
  //  $sql = "SELECT EXTRACT(YEAR from apptdate) as YEAR,EXTRACT(MONTH from apptdate) as MONTH, apptid FROM `appointmentinfo` WHERE clinicid=1";
   for ($year=$year_1;  $year>=2015 ; --$year){

   for ($month =1 ; $month <=12; $month++){
$sqlclinic="SELECT  * FROM clinicinfo";
$clinicres = $conn->query($sqlclinic);
if($clinicres ->num_rows>0){
   while($row1 = $clinicres->fetch_assoc()){


  // $sql = "SELECT EXTRACT(YEAR from proceduredate) as Year, EXTRACT(MONTH from proceduredate) as Month,COUNT(proceduretype) as count, clinicid FROM transactioninfo WHERE proceduretype='Production' AND clinicid=1 AND  EXTRACT(YEAR from proceduredate) =".$year."AND EXTRACT(MONTH from proceduredate)= ".$month."";
  //$sql = "SELECT  EXTRACT(YEAR from proceduredate) as Year, EXTRACT(MONTH from proceduredate) as Month, proceduretype  , COUNT(proceduretype) as count,clinicid  FROM  transactioninfo WHERE  clinicid= ".$row1["clinicid"]." AND proceduretype='Production' AND  EXTRACT(YEAR from proceduredate) =".$year."  AND EXTRACT(MONTH from proceduredate)= ".$month."";

$sql="

SELECT  EXTRACT(YEAR from proceduredate) as Year, EXTRACT(MONTH from proceduredate) as Month, proceduretype  , COUNT(proceduretype) as count,clinicid  FROM  transactioninfo WHERE  clinicid= ".$row1["clinicid"]." AND proceduretype='Payment' AND  EXTRACT(YEAR from proceduredate) =".$year."  AND EXTRACT(MONTH from proceduredate)= ".$month."
UNION ALL
SELECT  EXTRACT(YEAR from proceduredate) as Year, EXTRACT(MONTH from proceduredate) as Month, proceduretype  , COUNT(proceduretype) as count,clinicid  FROM  transactioninfo WHERE  clinicid=  ".$row1["clinicid"]." AND proceduretype='Production' AND  EXTRACT(YEAR from proceduredate) =".$year."  AND EXTRACT(MONTH from proceduredate)= ".$month."
UNION ALL
SELECT  EXTRACT(YEAR from proceduredate) as Year, EXTRACT(MONTH from proceduredate) as Month, proceduretype  , COUNT(proceduretype) as count,clinicid  FROM  transactioninfo WHERE  clinicid=  ".$row1["clinicid"]." AND proceduretype='Collection Adjsutment' AND  EXTRACT(YEAR from proceduredate) =".$year."  AND EXTRACT(MONTH from proceduredate)= ".$month."
UNION ALL
SELECT  EXTRACT(YEAR from proceduredate) as Year, EXTRACT(MONTH from proceduredate) as Month, proceduretype  , COUNT(proceduretype) as count,clinicid  FROM  transactioninfo WHERE  clinicid=  ".$row1["clinicid"]." AND proceduretype='Production Adjustment' AND  EXTRACT(YEAR from proceduredate) =".$year."  AND EXTRACT(MONTH from proceduredate)= ".$month."

";




    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        if($row["count"] == 0){

        }
        else{
      echo  '<tr>';

      echo "<td>".$row["clinicid"]."</td> <td>" .$row["Year"]. "</td> <td>" .$row["Month"]. "</td><td>".$row['proceduretype']."</td><td> " .$row["count"]."</td>" ;
    //  echo "<td>" .  $row["transid"]. "</td><td>" . $row["patid"]. "</td><td>" . $row["proceduretype"] . "</td> <td> ". $row["proceduredate"] . "</td> <td> " . $row["provider"]. "</td> <td>" . $row["amount"]. "</td> <td>". $row["clinicid"] . "</td>";

        echo '</tr>';
      }
    }
      } else {
      echo "0 results";
    }
}
}

}
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
