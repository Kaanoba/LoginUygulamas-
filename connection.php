<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=users', 'root', '');

} catch (PDOException $e){
    $e -> getMessage();
}
