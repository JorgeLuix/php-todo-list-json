<?php

$file = "./data/data.json";

function readTodos() {
  global $file;

  $json = file_get_contents($file);
  $data = json_decode($json, true);

  if (!$data) {
    $data = ["todos" => []];
  }

  return $data;
}
?>