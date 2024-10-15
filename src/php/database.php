<?php
  $hostname = 'localhost';
  $dbname = 'accounts_system';
  $username = 'root';
  $password = '';
  $charset = 'utf8mb4';

  $conn = "mysql:host=$hostname;dbname=$dbname;charset=$charset";
  $dboptions = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];

  try {
    $db = new PDO($conn, $username, $password, $dboptions);
  } 
  catch (PDOException $ex) {
    throw new PDOException($ex->getMessage(), (int)$ex->getCode());
  }
?>
