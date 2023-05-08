<?php

$file = "./data/data.json";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $json = file_get_contents($file);
  header('Content-Type: application/json');
  echo $json;
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $json = file_get_contents('php://input');
  $data = json_decode($json, true);
  $json = json_encode($data['todos']);
  file_put_contents($file, $json);
  header('Content-Type: application/json');
  echo json_encode(array('success' => true));
}
?>