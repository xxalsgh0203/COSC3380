<!doctype html>
<html lang="en">

<head>
  <title>Consultation</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg nav-back fixed-top" id="mainNav">
  <div class="container">
    <img src="../img/main_icon.png" class="mainicon">
    <a class="navbar-brand" href="./main.php">Medimon</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation"><i class="fas fa-syringe fa-2x"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="./login.php">Log in</a></li>
        <li class="nav-item"><a class="nav-link" href="./signup.php">Sign up</a></li>
        <li class="nav-item"><a class="nav-link" href="./patientPage.php">Manage Reservation</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative">
      <a href="../php/config.php" class="main-btn">Test connecting to database</a>
      <h1>Service opens in 2 weeks</h1>
      <h2>Group project COSC3380.</h2>
      <a href="./requestAppointment.php" class="main-btn">Make Reservation!</a>
    </div>
  </section>
  <!-- End Hero -->

  <div class="container mt-4 p-4" id="find-consult">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center my-4">
          Find Consultations
        </h2>
        <form>
          <div class="form-group row">
            <label class="col-sm-4 col-lg-4">
              Patient Name
            </label>
            <div class="col-sm-8 col-lg-8">
              <input type="text" id="patient-name" class="form-control" placeholder="Name" required>
            </div>
          </div>
          <!---->
          <div class="form-group row">
            <label class="col-sm-4 col-lg-4">
              Contact
            </label>
            <div class="col-sm-8 col-lg-8">
              <input type="tel" id="contact" class="form-control" placeholder="123" required>
            </div>
          </div>
          <!---->
          <div class="form-group row">
            <label class="col-sm-4 col-lg-4">
              Date
            </label>
            <div class="col-sm-8 col-lg-8">
              <input type="date" id="date" class="form-control">
            </div>
          </div>
          <!---->
          <div class="form-group row">
            <label class="col-sm-4 col-lg-4">
              Time
            </label>
            <div class="col-sm-8 col-lg-8">
              <input type="time" id="time" class="form-control">
            </div>
          </div>
          <!---->
          <div class="form-group row">
            <label class="col-sm-4 col-lg-4">
              Symptoms
            </label>
            <div class="col-sm-8 col-lg-8">
              <textarea id="symptoms" class="form-control" required></textarea>
            </div>
          </div>
          <!---->
          <div class="form-group row justify-content-end">
            <div class="col-sm-5">
              <button type="submit" class="btn btn-form">
                Confirm
              </button>
            </div>
          </div>

        </form>
      </div>
      <div class="col-md-6">
        <h2 id="services" class="text-center my-4"></h2>
        <ul id="consultations" class="list-group"></ul>
      </div>
    </div>
  </div>

  <!-- Footer-->
  <footer class="footer py-4 mt-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-left">COSC3380 Group Project</div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-back btn-social mx-2" href="#!">
            <i class="fab fa-twitter"></i></a>
          <a class="btn btn-back btn-social mx-2" href="#!">
            <i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-back btn-social mx-2" href="#!">
            <i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-lg-4 text-lg-right">
          <a class="mr-3 text" href="#!">Privacy Policy</a>
          <a href="#!" class="text">Terms of Use</a></div>
      </div>
    </div>
  </footer>

  <script src="main.js"></script>
</body>

</html>