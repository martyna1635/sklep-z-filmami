<?php
session_start();
//import bilbioteki movie
require '../mysql/Order.php';

header('Content-Type: application/json');


$order = new Order(); 


// Zwraca 0 lub 1 jeśli pomyslnie utworzono
$data = [
	'created' => ($order->create($_SESSION['userId'], $_POST['movieId']))?1:0
	];

echo json_encode($data);

