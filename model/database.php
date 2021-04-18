<?php
    // Heroku connection
    $dsn = 'mysql:host=cis9cbtgerlk68wl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dskhqy7gjigp1tyk';
    $username = 'mjlp8ikbk27a5shw';
    $password = 'aeako0qc5rkgczos'; 
    
    try {
        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('../view/error.php');
        exit();
    }
?>