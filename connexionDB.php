<?php
    try{
        $BD = new PDO('mysql:host=localhost;port=3306;dbname=CV_bd', 'root', '');
    } catch (PDOException $e){
        die($e->getMessage());
    }
?>