<?php

$allow = true;

try {
    $rawdata = file_get_contents("php://input");
    $jsonBody = json_decode($rawdata);
} catch (Exception $e) {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'get.php';
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'post.php';
} else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    include 'put.php';
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    include 'delete.php';
}





header('Content-Type: application/json');
