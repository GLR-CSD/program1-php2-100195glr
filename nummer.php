<?php
session_start();

require_once 'db.php';
require_once 'classes/Nummer.php';

// Haal alle personen op uit de database
$nummers = nummer::getAll($db);

// Laad de view
include 'views/nummer_view.php';
?>
