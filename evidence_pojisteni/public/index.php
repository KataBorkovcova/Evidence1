

<?php
require_once '../controllers/OsobaController.php';

$db = new PDO('mysql:host=localhost;dbname=pojisteni_db', 'root', '');

$controller = new OsobaController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->vytvorOsobu($_POST);
}

$osoby = $controller->zobrazOsoby();

require '../views/zobrazOsoby.php';