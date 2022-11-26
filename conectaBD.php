<?php

try {
  $conn = new PDO('mysql:host=localhost;dbname=liloca', 'root', 'root');
  // echo 'Conectou';
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}

function lastId()
{
  $conn = new PDO('mysql:host=localhost;dbname=liloca', 'root', 'root');
  return $conn->lastInsertId();
}

?>