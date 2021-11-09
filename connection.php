<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=ürünler', 'root', '');

} catch (PDOException $e){
    $e -> getMessage();
}
