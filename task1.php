<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitalDB";


$conn = new mysqli($servername, $username, $password,$dbname);

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
.select-css{
  padding: 8px;
}
.btn-success {

    margin-left:30px;
}
select {
                appearance: none;
                outline: 0;
                background: gray;
                background-image: none;
                width: ;
                height: ;
                color: white;
                cursor: pointer;
                border:1px solid black;
                border-radius:3px;
            }
            .select {
                position: relative;
                display: block;
                width: 15em;
                height: 2em;
                line-height: 3;
                overflow: hidden;
                border-radius: .25em;
                padding-bottom:10px;

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

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
  <br>

<div class="container">
  <div class="dropdown">

      <form method="POST" action="task1.php">
      <label for="clinics">Choose a CLINIC:</label><br>
        <select class="select-css" name="clinics" >

     <?php
          $sql = "SELECT * from clinicinfo";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {



                  echo "<option  name='clinicname' value='".$row['clinicid']."'> ".$row['clinicname']."</option>" ;

                  }
                } else {
                  echo "0 results";
                }
      ?>
    </select>

          <input  class="btn btn-success" type="submit" name="submit"><br>
      </form>
    </div>
  </div>
  <br>

  <div class="container">

<?php

 if(isset($_POST['submit']))
 {

echo '
<table class="table table-bordered table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CLINICID</th>
      <th scope="col">YEAR</th>
      <th scope="col">MONTH</th>
      <th scope="col">COUNT</th>
    </tr>
  </thead>
  <tbody>
';


   $clinc_id = $_POST["clinics"];

   $year_1 = date("Y")+1;

  for ($year=$year_1;  $year>=2015 ; --$year){

   for ($month=1 ; $month <=12; $month++){

   $sql = "SELECT count(*) as count,EXTRACT(YEAR from apptdate) as Year,  EXTRACT(MONTH from apptdate) as Month ,clinicid  FROM `appointmentinfo` WHERE clinicid= ".$clinc_id." and EXTRACT(YEAR from apptdate) =". $year." and EXTRACT(MONTH from apptdate)= ".$month."";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while($row = $result->fetch_assoc()) {

   if($row["count"] == 0){

   }else{

      echo  '<tr>';

      echo "<td>".$row["clinicid"]."</td> <td>" .$row["Year"]. "</td> <td>" .$row["Month"]. "</td><td>".$row["count"]."</td>" ;

        echo '</tr>';
      }
      }
      } else {
      echo "0 results";
    }
}

}

}

echo '
</tbody>
</table>
';


?>

  </div>
</body>
</html>
<?php
$conn->close();
?>
