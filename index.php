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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">La nostra struttura</a></li>
          <li><a class="nav-link  scrollto" href="#cta">Rifugio</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">I nostri cani</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contatti</a></li>
          <li><a class="nav-link scrollto"></a></li>
          <?php
            if(!empty($_SESSION)) {
          ?>
              <li><a href="http://localhost/CasaDiTom/logout.php"><i class="fas fa-sign-out-alt"> </i> Logout</a></li>
              <?php
              if($_SESSION['Admin']=='1') {
                $InserisciAdozione='';
              ?>  
                <li><a class="nav-link scrollto" href="index.php?InserisciAdozione=1" onclick="<?php $InserisciAdozione='1'?>" name="InserisciAdozione"><i class="fas fa-tools"></i> Nuova adozione</a></li>
              <?php
              } else {
              ?>
                <li><a class="nav-link scrollto" href="AreaPrivata.php?Proprietario=<?php echo($_SESSION["Username"]); ?>" name="ProprietarioCane"><i class="fas fa-user-shield"></i> Area personale</a></li>
              <?php
              }
              ?>
          <?php
            }else{
          ?>
          <li><a class="nav-link scrollto" href="Formlogin.php"><i class="fas fa-sign-in-alt"> </i> </i> Accedi</a></li>
          <li><a class="nav-link scrollto" href="FormRegistrati.php"><i class="fas fa-user-plus"> </i> Registrati</a></li>
          <?php
            }
          ?>
        </ul>
      </nav><!-- .navbar-->

    </div>
  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(https://images.wallpaperscraft.com/image/dog_paw_lies_112849_3840x2400.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animated fadeInDown">Benvenuto nella  <span>Casa Di Tom</span></h2>
            <p class="animated fadeInUp">Adori i cani e vuoi adottarne uno? <br> Da noi puoi trovare il tuo amico a quattro zampe che fa per te!</p>
            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Scopri di pi&ugrave</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(https://images.wallpaperscraft.com/image/dog_sitting_foliage_118931_3840x2400.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animated fadeInDown">Pensione per cani</h2>
            <p class="animated fadeInUp">Desideri andare in vacanze ma non sai dove lasciare il tuo amico a quattro zampe? <br> Prenota un posto al rifugio presso di noi e ti assicuriamo che il tuo cane si divertir&agrave come non mai!</p>
            <a href="#cta" class="btn-get-started animated fadeInUp scrollto">Prenota</a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

  <main id="main">
    <?php
      if(!empty($_SESSION)){
        if($_SESSION['Admin']=='1') {
          if($InserisciAdozione=='1') {
    ?>
    <!-- ============ Inserisci adozione Section =============== -->
    <section id="InserisciAdozione" class="services contact section-bg">
      <div class="container fluid">
        <div class="section-title">
          <h2>ADOZIONI</h2>
          <h3>Inserisci <span>nuova adozione</span></h3>
        </div>
                <form method="GET" class="php-email-form" action="inserisciAdozione.php?CaneNome=<?php $Nome?>&Cognome=<?php $Cognome?>&Email=<?php $Email?>&Telefono=<?php $Telefono?>&Indirizzo=<?php $Indirzzo?>&NumCivico=<?php $NumCivico?>&Citta=<?php $Citta?>">
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="name">Seleziona cane da adottare</label>
                      <?php
                      $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                      if ($conn->connect_error) {
                      die("Connessione fallita: " . $conn->connect_error);
                      }
                      $query = "SELECT * FROM cane WHERE Adottabile LIKE '1'";
                      $result = $conn->query($query);
                      ?>

                      <select class="form-control" name="CaneNome" required>
                      <?php
                      while($row = $result->fetch_assoc()){
                        ?>
                          <option name="CaneNome" value="<?php $row['Microchip']; ?>"><?php echo $row['NomeCane']; ?></option>
                      <?php 
                      } 
                      ?>
                      </select>
                    </div>  
                    <div class="col-md-3 form-group">
                      <label for="name">Nome</label>
                      <input type="text" name="Nome" class="form-control" id="name" required placeholder="Nome">
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="name">Cognome</label>
                      <input type="text" name="Cognome" class="form-control" id="name" required placeholder="Cognome">
                    </div>                    
                    <div class="col-md-3 form-group">
                      <label for="name"> Telefono (Compreso di prefisso)</label>
                      <input type="tel" class="form-control" name="Telefono" placeholder="Telefono" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-3 form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="Email" id="email" required placeholder="Email">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Indirizzo</label>
                      <input type="text" name="Indirizzo" class="form-control" id="name" required placeholder="Indirizzo">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Numero civico</label>
                      <input type="text" name="NumCivico" class="form-control" id="name" required placeholder="NumCivico">
                    </div>
                    <div class="col-md-3 form-group">
                      <label>Citt&agrave</label>
                      <input type="text" name="Citta" class="form-control" id="name" required placeholder="Citt&agrave">
                    </div>
                  </div>
                  <br>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit" name="Inserisci">Inserisci</button></div>               
                </form>
                <?php
                  if(isset($_GET['Inserisci'])){
                  $Cane=$_GET['CaneNome'];
                  echo($Cane);
                  $Nome=$_GET['Nome'];
                  echo($Nome);
                  $Cognome=$_GET['Cognome'];
                  echo($Cognome);
                  $Email=$_GET['Email'];
                  echo($Email);
                  $Telefono=$_GET['Telefono'];
                  echo($Telefono);
                  $Indirizzo=$_GET['Indirizzo'];
                  echo($Indirizzo);
                  $NumCivico=$_GET['NumCivico'];
                  echo($NumCivico);
                  $Citta=$_GET['Citta'];
                  echo($Citta);
                  }
                ?>
              </div>
    </section> <!-- End Insrisci adozione Section -->
      <?php
          }
        }
      }
      ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://youtu.be/yMdKy6DgFDI" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>La nostra struttura</h3>
            <p style="text-align: justify">Ecco un breve video della nostra struttura. Presso il nostro rifugio anche il tuo cane potr&agrave vivere una vacanza. Inoltre, esso far&agrave nuove conoscenze con altri amici a quattro zampe e, nel caso in cui potrebbero piacersi, potrai adottare un suo simile!</p>

            <div class="icon-box">
              <div class="icon"><i class="fas fa-dog"></i></div>
              <h4 class="title"><a href="">Adotta un cane</a></h4>
              <p class="description">Vieni nella nostra struttura a scegliere il tuo nuovo amico a quattro zampe. E dopo un periodo di prova diventer&agrave tuo!</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fas fa-home"></i></div>
              <h4 class="title"><a href="#prenotazione">Prenota il rifugio presso di noi</a></h4>
              <p class="description">Il nostro rifugio &egrave il posto ideale per goderti la vacanza estiva e lasciare il tuo amico a quattro zampe in buone mani!</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Prenota rifugio per il tuo cane</h3>
          <p> Vuoi vivere una settimana di vacanza ma non puoi portare il tuo amico a quattro zampe? <br>Abbiamo noi la tua soluzione.</p>
          <a class="cta-btn" href="#cta">Verifica disponibilit&agrave</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Prenotazione rifugio Section ======= -->
    <section id="cta" class="contact section-bg" >
      <div class="container-fluid">
        <div class="section-title">
            <h2>Prenotazione</h2>
            <h3>Verifica disponibilit&agrave</h3>            
        </div>
        <div class="row justify-content-center">

          <div class="col-xl-10">
            <form action="prenotazione.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="inputDate"> Data inizio prenotazione</label>
                  <input type="date" name="DataInizioPrenotazione" class="form-control" id="inputDate" placeholder="Data GG/MM/AAAA" required>
                </div>

                <div class="col-md-6 form-group">
                  <label for="inputDate"> Data fine prenotazione</label>
                  <input type="date" name="DataFinePrenotazione" class="form-control" id="inputDate" placeholder="Data GG/MM/AAAA" required>
                </div>

                <div class="col-md-12 form-group">
                  <br>
                  <button class="form-control" name="verificaDisponibilita" type="submit">Verifica disponibilit&agrave</button>
                </div>
              </div> <!-- ROW -->
            </form>
          </div>
            <?php  
            if(isset($_POST["verificaDisponibilita"])){     
              $DataInizioPrenotazione=$_POST['DataInizioPrenotazione'];
              $DataFinePrenotazione=$_POST['DataFinePrenotazione'];

              $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
              if ($conn->connect_error) {
              die("Connessione fallita: " . $conn->connect_error);
              }
              $query = "SELECT COUNT(*) AS c
                        FROM prenotazioni
                        WHERE DataInizioPrenotazione
                        BETWEEN '$DataInizioPrenotazione' AND '$DataFinePrenotazione'";
              $result = $conn->query($query);

              $row = $result->fetch_assoc();
              if($row['c']<='3'){
                echo'<script>alert("Prenotazione disponibile")</script>';

                $query = "INSERT INTO prenotazioni
                (DataInizioPrenotazione, DataFinePrenotazione)
                VALUES
                ('$DataInizioPrenotazione', '$DataFinePrenotazione')";
                if ($conn->query($query)) {
                  
                  header("location: http://localhost/CasaDiTom/prenotazione.php");
                  $conn->close();
                ?>
                  
                    <!-- =================== FORM DATI PADRONE ==================== -->  
                  <div class="section-title">
                    <br>
                    <h3>Dati anagrafici padrone</h3>            
                  </div>                         
                  <div class="col-xl-10">
                    <form action="" method="POST" class="php-email-form">
                        <div class="row">
                            <div class="col-md-3 form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="Nome" class="form-control" required placeholder="Nome">
                            </div>

                            <div class="col-md-3 form-group">
                            <label for="name">Cognome</label>
                            <input type="text" name="Cognome" class="form-control" required placeholder="Cognome">
                            </div>

                            <div class="col-md-3 form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="Email" required placeholder="Email">
                            </div>
                        </div> <!-- row -->
                        <br>
                        <div class="row">
                            <div class="col-md-3 form-group">
                            <label for="name">Indirizzo</label>
                            <input type="text" name="Indirizzo" class="form-control" required placeholder="">
                            </div>

                            <div class="col-md-3 form-group">
                            <label for="name">Numero civico</label>
                            <input type="text" name="Civico" class="form-control" required placeholder="">
                            </div>

                            <div class="col-md-3 form-group">
                            <label for="name">Citt&agrave</label>
                            <input type="text" name="Citta" class="form-control" required placeholder="">
                            </div>

                            <div class="col-md-3 form-group">
                            <label for="name">Telefono (Compreso di prefisso)</label>
                            <input type="tel" name="NumTel" class="form-control" required placeholder="">
                            </div>
                        </div> <!-- row -->
                        <br>
                        <button class="form-control" name="datiPadrone" type="submit">Inserisci dati</button>
                    </form>
                    <?php
                    if(isset($_POST["datiPadrone"])) {
                        $Nome=$_POST['Nome'];
                        echo "ciao";
                        $Cognome=$_POST['Cognome'];
                        $Email=$_POST['Email'];
                        $Tel=$_POST['NumTel'];
                        $Ind=$_POST['Indirizzo'];
                        $Civico=$_POST['NumCivico'];
                        $Citta=$_POST['Citta'];

                        $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                        if ($conn->connect_error) {
                          die("Connessione fallita: " . $conn->connect_error);
                        }
                        $query = "UPDATE prenotazioni
                                  SET FK_ProprietarioC = '$Email'
                                  WHERE IDPrenotazione =
                                    (SELECT MAX(IDPrenotazione)
                                    FROM prenotazioni)";

                        $queryProprietario = "INSERT INTO proprietario
                        (Nome, Cognome, Indirizzo, NumCivico, Citta, Telefono, Email, Rifugio)
                        VALUES
                        ('$Nome', '$Cognome', '$Ind', '$Civico', '$Citta', '$Tel', '$Email', '1')";
                        echo $queryProprietario;
                        if ($conn->query($queryProprietario)) {
                            echo'"<script>alert("Dati anagrafici padrone registrati con successo!")</script>';
                            $conn->close();
                    ?>
                            <!-- =================== FORM DATI CANE ==================== -->
                            <div class="section-title">
                              <br>
                              <h3>Dati cane</h3>            
                            </div>          
                            <div class="col-xl-10">
                                <form action="" method="POST" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="name">Microchip</label>
                                            <input type="text" name="MicrochipCane" class="form-control" required placeholder="">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" name="NomeCane" class="form-control" required placeholder="Nome cane">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="name">Data di nascita</label>
                                            <input type="date" name="DataNascita" class="form-control" required placeholder="gg/mm/aaaa">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="text">Razza</label>
                                            <input type="text" class="form-control" name="RazzaCane" required placeholder="Razza">
                                        </div>
                                    </div> <!-- row -->
                                    <br>

                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="name">Mantello</label>
                                            <input type="text" name="MantelloCane" class="form-control" required placeholder="Mantello">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="name">Taglia</label>
                                            <input type="text" name="TagliaCane" class="form-control" required placeholder="Taglia">
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label for="name">Peso attuale</label>
                                            <input type="text" name="PesoAttuale" class="form-control" required placeholder="Peso attuale">
                                        </div>
                                        </div> <!-- row -->
                                    <br>
                                    <button class="form-control" name="datiCani" type="submit">Registra cane</button>
                                </form>
                            </div>
                            <?php
                            if(isset($_POST["datiCani"])) {
                                $NomeCane=$_POST['NomeCane'];
                                $Microchip=$_POST['MicrochipCane'];
                                $DataNascita=$_POST['DataNascita'];
                                $Razza=$_POST['RazzaCane'];
                                $Mantello=$_POST['MantelloCane'];
                                $Taglia=$_POST['TagliaCane'];
                                $PesoAtt=$_POST['PesoAttuale'];

                                $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                                if ($conn->connect_error) {
                                  die("Connessione fallita: " . $conn->connect_error);
                                }
                                $queryCane = "INSERT INTO cane
                                (Microchip, NomeCane, DataNascita, Razza, Mantello, Taglia, PesoAttuale)
                                VALUES
                                ('$Microchip', '$NomeCane', '$DataNascita', '$Razza', '$Mantello', '$Taglia', '$PesoAtt')";
                                echo $queryCane;
                                $result = $conn->query($queryCane);
                                if ($result) {
                                    echo'"<script>alert("Prenotazione avvenuta con successo successo!")</script>';
                                    $conn->close();
                                } else
                                echo'<script>alert("Errore nella prenotazione")</script>';
                            }

                        } else
                        echo'<script>alert("Dati anagrafici non registrati")</script>';
                    }
                  ?>
                </div>
            <?php
                } else
                  echo'<script>alert("Data non registrata")</script>';
              } else {
                echo'<script>alert("Data non valida. Rifugio pieno.")</script>';
              }
              //$conn->close();  
            }
            ?>
          </div>
        </div>
      </div>
    </section>  <!-- END Form prenotazione -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>I nostri cani</h2>
          <h3>I nostri <span>cani adottabili</span></h3>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">
                  <?php
                    $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                    if ($conn->connect_error) {
                    die("Connessione fallita: " . $conn->connect_error);
                    }
                    $query = "SELECT Immagine, Microchip, Adottabile, NomeCane, Razza FROM Cane WHERE Adottabile LIKE '1'";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                      $Microchip=$row['Microchip'];
                  ?>
                  
                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                      <?php
                        $dato64 = base64_encode($row['Immagine']);
                        echo "<img src='data:image/jpg;base64, $dato64' style='width: 370px; height: 250px;' class='img-fluid'>";
                      ?>
                      <div class="portfolio-info">
                        <h4><?php echo $row["NomeCane"]; ?></h4>
                        <p><?php echo $row["Razza"]; ?></p>
                        <div class="portfolio-links">
                          <a href="http://localhost/CasaDiTom/portfolio-details.php?Microchip=<?php echo($Microchip);?>" title="Dettagli"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div><!-- End portfolio item -->
                  <?php
                  }
                  $conn->close();
                  ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Testimonianze</h2>
          <h3>Recensioni dei clienti</h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <?php
              $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
              if ($conn->connect_error) {
              die("Connessione fallita: " . $conn->connect_error);
              }
              $query = "SELECT * 
                        FROM testimonianza";
              $result = $conn->query($query);

              while($row = $result->fetch_assoc()){
              ?>

              <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                  
                  <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img">
                  <h3> <?php echo($row['Nome']);?></h3>
                  <h4> <?php echo($row['Oggetto']);?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo($row['Messaggio']);?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->
              <?php
              }
              ?>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contatti</h2>
          <h3>Get <span>In Touch</span></h3>
          <p>Non dimenticare di lasciarci la tua opinione nel box di seguito!</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">
                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Address</h4>
                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Call Us</h4>
                    <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email Us</h4>
                    <p>contact@example.com<br>info@example.com</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Working Hours</h4>
                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                  </div>

                </div>
              </div>

              <div class="col-lg-6">
                <h3>Testimonianza</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">Nome</label>
                      <input type="text" name="Nome" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="Email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="subject">Oggetto</label>
                    <input type="text" class="form-control" name="Oggetto" id="subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="message">Messaggio</label>
                    <textarea class="form-control" name="Messaggio" rows="5" required></textarea>
                  </div>
                  <br>
                  <div class="text-center"><button type="submit" value="Inserisci" name="inserisci">Inserisci</button></div>
                </form>
                <?php
                if(isset($_POST['inserisci'])){
                  $NomeTestimonianza = $_POST['Nome'];
                  $EmailTestimonianza = $_POST['Email'];

                  $OggettoTestimonianza = htmlentities($_POST['Oggetto']);
                  $MessaggioTestimonianza = htmlentities($_POST['Messaggio']);

                  echo ("Oggetto: ".$OggettoTestimonianza);
                  
                  $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                  if ($conn->connect_error) {
                    die("Connessione fallita: " . $conn->connect_error);
                    }
                    $query = "INSERT INTO testimonianza
                              (Nome, Email, Oggetto, Messaggio)
                              VALUES ('$NomeTestimonianza', '$EmailTestimonianza', '$OggettoTestimonianza', '$MessaggioTestimonianza')";
                    echo $query;
                    if($conn->query($query)) {
                      echo ("<script>alert('Testimonianza inserita correttamente')</script>");
                    } else
                      echo ("<script>alert('Testimonianza non inserita')</script>");
                }
                ?>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

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