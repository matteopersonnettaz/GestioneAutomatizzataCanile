<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Casa Di Tom</title>

  <!-- Favicons -->
  <link href="img/LogoCasa.png" rel="icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
        </ul>
      </nav><!-- .navbar-->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Dettagli cane</li>
        </ol>
        <h2>Dettagli cane</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <?php
            $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
            if ($conn->connect_error) {
            die("Connessione fallita: " . $conn->connect_error);
            }
            $Microchip = $_GET["Microchip"];
            $query = "SELECT DISTINCT *
            FROM cane, vaccinazione AS v, visita
            WHERE visita.FK_Cane = cane.Microchip AND visita.IDVisita = v.FK_IDVisita AND cane.Microchip LIKE '$Microchip'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
          ?>

              <div class="col-lg-6">
                <?php
                  $dato64 = base64_encode($row['Immagine']);
                  echo "<img src='data:image/jpg;base64, $dato64' class='img-fluid'>";
                ?>
              </div>

              <div class="col-lg-6">
                <div class="portfolio-info">
                  <h3>Informazioni sul cane</h3>
                  <ul>
                    <li><strong>Nome</strong>: <?php echo($row['NomeCane']);?></li>
                    <li><strong>Microchip</strong>: <?php echo($row['Microchip']);?></li>
                    <li><strong>Adottabile</strong>: <?php echo($row['Adottabile']);?></li>
                    <li><strong>Data di nascita</strong>: <?php echo($row['DataNascita']);?></li>
                    <li><strong>Razza</strong>: <?php echo($row['Razza']);?></li>
                    <li><strong>Mantello</strong>: <?php echo($row['Mantello']);?></li>
                    <li><strong>Taglia</strong>: <?php echo($row['Taglia']);?></li>
                    <li><strong>Peso</strong>: <?php echo($row['PesoAttuale']);?> Kg</li>
                  </ul>
                  <br>
                  <h3>Stato vaccinazioni</h3>
                  <ul>
                    <li><strong>Nome vaccino</strong>: <?php echo($row['NomeVaccino']);?></li>
                    <li><strong>Data vaccino</strong>: <?php echo($row['DataVaccino']);?></li>
                  </ul>
                  <br>
                  <?php
                  while($row = $result->fetch_assoc()) {
                  ?>
                  <ul>
                    <li><strong>Nome vaccino</strong>: <?php echo($row['NomeVaccino']);?></li>
                    <li><strong>Data vaccino</strong>: <?php echo($row['DataVaccino']);?></li>
                  </ul>
                  <br>
                <div>
                  <?php
                  }
                  ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; <strong><span>2021 - La Casa di Tom</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>