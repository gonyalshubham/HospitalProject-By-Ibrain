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
  .carousel-inner img {
    width: 100%;
    height: 40%;
  }
  .col-sm-4{
    padding-left: 250px;
    padding-top: 100px;
  }
  a{
    padding: 25px;

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

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">


  <ul class="carousel-indicators">
    <li data-target="index.php" data-slide-to="0" class="active"></li>
    <li data-target="index.php" data-slide-to="1"></li>
    <li data-target="index.php" data-slide-to="2"></li>
  </ul>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="doctor3.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="doctor2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="doctor1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>


  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<br>

  <div class="container-fluid">
        <h1 style="text-align:center">Your Partner in On-Demand Doctor Appointment App Development</h1>
        <p style="text-align:center">Doctor appointment app is the future of modern medicine. It empowers doctors, patients and healthcare enterprises to capitalize on a simple but powerful technological device i.e the smartphone. On-demand doctor booking apps can help the patients connect to doctors instantly, share reports and get prescriptions from home. Our mobile app development team with an industry-wide experience of more than a decade is well equipped for this task. Our budget-friendly and easy-to-launch solutions ensure that your app provides the right experience at the right time. It brings together all stakeholders - doctors, patients and other health technicians - into a single platform.</p>
    </div>
    <br>
    <br>


        <div class="container-fluid">
          <h1 style="text-align:center">Top Features of Our On-Demand Doctor Scheduling App</h1>
            <div class="row" style="text-align:center">
              <div class="col-sm-4">
              <h2 style="font-style: italic;">Appointment'S</h2>
              <p style="font-style: normal;">Show number of appointments by a clinic, by year, by month and display values.</p>
              <a href="task1.php"  class="list-group-item list-group-item-action list-group-item-secondary">Click</a>
            </div>

              <div class="col-sm-4">
              <h2 style="font-style: italic;">NotScheduled</h2>
              <p style="font-style: normal;">Show a list of patients with patient details who do not have appointments in the future.</p>
                <a href="task2.php"  class="list-group-item list-group-item-action list-group-item-secondary">Click </a>
            </div>
        </div>
        <div class="row" style="text-align:center">
          <div class="col-sm-4" style="text-align:center">
          <h2 style="font-style: italic;">Updation</h2>
          <p style="font-style: normal;">Calculate the age of the patient from birthdate. Update patientagegroup column- if age is less than 18 then Minor and other Adult.</p>
          <a href="task3.php"  class="list-group-item list-group-item-action list-group-item-secondary">Click </a>
        </div>
        <div class="col-sm-4">
        <h2 style="font-style: italic;">OverallView</h2>
        <p style="font-style: normal;"> Total production, Payments, Production Adjustments, Collection Adjustments by clinic name by Provider name by year by month.</p>
        <a href="task4.php"  class="list-group-item list-group-item-action list-group-item-secondary">Click </a>
        </div>
          </div>
          <div class="row" style="text-align:center">
            <div class="col-sm-4">
            <h2 style="font-style: italic;">Delete</h2>
            <p style="font-style: normal;"> Delete appointment having amount less than 50</p>
            <a href="task5.php"  class="list-group-item list-group-item-action list-group-item-secondary">Click </a>
          </div>

            <div class="col-sm-4">
            <h2 style="font-style: italic;">Health Que's</h2>
            <p style="font-style: normal;">Some text about me in culpa qui officia deserunt mollit anim..</p>
            <a href="task6.php"  class="list-group-item list-group-item-action list-group-item-secondary">Click </a>
          </div>
      </div>
          </div>


<br><br>
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
