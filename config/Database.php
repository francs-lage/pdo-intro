<?php 
    $host = 's29oj5odr85rij2o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $db_name = 'saue4p4vl4n7s6v2';
    $username = 'cicnlgrlezlr3gvu';
    $password = 'niar77j0vassnkzj';

    try {
        $db = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $error_message = 'Database Error: ';
        $error_message .= $e->getMessage();
        echo $error_message;
        exit('Unable to connect to the database');
    }