<?php //Convert Data Source into json
  include __DIR__ . '/data.php';

  header('Content-Type: application/json');

  echo json_encode($albums);