<!-- =================== FORM DATI CANE ==================== -->
<div class="col-xl-10">
    <div class="row">
        <br>
        <br>
        <h2>Verifica disponibilit&agrave</h2>
        <br>
        <br>
    </div>
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
        $Cognome=$_POST['Cognome'];
        $Email=$_POST['Email'];
        $Tel=$_POST['NumTel'];
        $Ind=$_POST['Indirizzo'];
        $Civico=$_POST['NumCivico'];
        $Citta=$_POST['Citta'];

        $query = "INSERT INTO proprietario
        (Nome, Cognome, Indirizzo, NumCivico, Citta, Telefono, Email, Rifugio)
        VALUES
        ('$Nome', '$Cognome', '$Ind', '$Civico', '$Citta', '$Tel', '$Email', '1')";
        echo $query;
        if ($conn->query($query)) {
            echo'"<script>alert("Dati anagrafici padrone registrati con successo!")</script>';
        ?>
            <!-- =================== FORM DATI CANE ==================== -->
            <div class="col-xl-10">
                <div class="row">
                    <br>
                    <br>
                    <h2>Verifica disponibilit&agrave</h2>
                    <br>
                    <br>
                </div>
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


                $queryCane = "INSERT INTO cane
                (Microchip, NomeCane, DataNascita, Razza, Mantello, Taglia, PesoAttuale)
                VALUES
                ('$Microchip', '$NomeCane', '$DataNascita', '$Razza', '$Mantello', '$Taglia', '$PesoAtt')";
                echo $query;
                $result = $conn->query($queryCane);
                if ($result) {
                    echo'"<script>alert("Prenotazione avvenuta con successo successo!")</script>';
                } else
                echo'<script>alert("Errore nella prenotazione")</script>';
            }

        } else
        echo'<script>alert("Dati anagrafici non registrati")</script>';
    }
?>