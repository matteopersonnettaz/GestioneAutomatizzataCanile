<?php
        $mail_destinatario = $_POST["Username"];
        $Password = $_POST["Password"];
        $ControllaPassword= $_POST["ControllaPassword"];

        if ($Password != $ControllaPassword){
                header("location: FormRegistrati.php");
        }
        else
        {
                $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                if ($conn->connect_error) {
                die("Connessione fallita: " . $conn->connect_error);
                }
                $query = "SELECT * FROM user WHERE Username LIKE '$mail_destinatario'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                if(empty($row))
                {
                        $conn->close();
                        
                        $conn = new mysqli("localhost","root","", "DB_CasaDiTom");
                        if ($conn->connect_error) {
                        die("Connessione fallita: " . $conn->connect_error);
                        }
                        $query = "INSERT INTO user
                                (Username, Password)
                                VALUES('$mail_destinatario', '$Password')";
                        $result = $conn->query($query);
                        $conn->close();
                        /*
                        //INVIO DELL'EMAIL
                        
                        // definisco mittente e destinatario della mail
                        $nome_mittente = "Matteo Personnettaz";
                        $mail_mittente = "matte07062002@gmail.com";
                        //$mail_destinatario = "sm.personnettaz@mail.scuole.vda.it";
                        
                        // definisco il subject
                        $mail_oggetto = "Credenziali di accesso";
                        
                        // definisco il messaggio formattato in HTML
                        $mail_corpo = <<<HTML
                        <html>
                        <body>
                        Questo è un messaggio di prova l'<b>invio di mail in HTML</b>.
                        </body>
                        </html>
                        HTML;
                        
                        // aggiusto un po' le intestazioni della mail
                        // E' in questa sezione che deve essere definito il mittente (From)
                        // ed altri eventuali valori come Cc, Bcc, ReplyTo e X-Mailer
                        $mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
                        $mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
                        $mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                        
                        // Aggiungo alle intestazioni della mail la definizione di MIME-Version,
                        // Content-type e charset (necessarie per i contenuti in HTML)
                        $mail_headers .= "MIME-Version: 1.0\r\n";
                        $mail_headers .= "Content-type: text/html; charset=iso-8859-1";
                        
                        if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
                        echo "Messaggio inviato con successo a " . $mail_destinatario;
                        else
                        echo "Errore. Nessun messaggio inviato.";
                        */
                }
                else
                echo("Utente già presente");
                //Utente gia presente quindi effettuo il login
                header("location: FormLogin.php");
        }
        ?>