<?php
    // Heroku connection
    $dsn = 'mysql:host=grp6m5lz95d9exiz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=qg6jlaugvzewbacd';
    $username = 'ilxxtz4dujznlm3s';
    $password = 'oo858qqbh2afdkcz'; 
    
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