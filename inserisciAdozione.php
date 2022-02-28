<?php

        $conn = new mysqli("localhost","root","", "DB_CasaDiTom");

        $Cane=$_GET['CaneNome'];
        $Nome =$_GET['Nome'];
        $Cognome=$_GET['Cognome'];
        $Email=$_GET['Email'];
        $Telefono=$_GET['Telefono'];
        $Indirizzo=$_GET['Indirizzo'];
        $NumCivico=$_GET['NumCivico'];
        $Citta=$_GET['Citta'];

        if (!empty($Nome)&&!empty($Cognome)&&!empty($Email)&&!empty($Telefono)&&!empty($Indirizzo)&&!empty($NumCivico)&&!empty($Citta)){
        
                if ($conn->connect_error) {
                die("Connessione fallita: " . $conn->connect_error);
                }
                $query = "SELECT * FROM proprietario WHERE Email LIKE '$Email'";
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                if(empty($row)){
                        $query = "INSERT INTO proprietario
                                (Nome, Cognome, Email, Telefono, Indirizzo, NumCivico, Citta)
                                VALUES('$Nome', '$Cognome', '$Email', '$Telefono', '$Indirizzo', '$NumCivico', '$Citta')";
                        if ($conn->query($query)) {
                                $query="UPDATE cane
                                SET (Adottabile='0', DataAdozione=/'date('Y/m/d')/', FK_Proprietario='$Email')
                                WHERE '112233445566778' LIKE (SELECT Microchip FROM cane)";

                                echo("Adozione andata a buon fine. Grazie!");

                        }
                }
                else{
                        echo ("<script>alert('Proprietario già registrato!')</script>");
                        sleep(5);
                        //header("location: http://localhost/CasaDiTom/index.php");
                }
                $conn->close();
        }
        else
        echo("Varibili vuote");
        ?>