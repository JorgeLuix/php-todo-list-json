<?php

$file = "./data/data.json";

  $json = file_get_contents($file);
  $data = json_decode($json, true);

  header('Content-Type: application/json');
  echo json_encode($data);

?>