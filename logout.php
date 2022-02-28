<?php
//Avvio la sessione
session_start();
session_unset();
//DISTRUGGE la sessione
session_destroy();
$_SESSION = array();

header("Location: http://localhost/CasaDiTom/index.php"); //si torna alla pagina home per il login
exit; //si termina lo script in modo da ritornare alla schermata di login
?>
