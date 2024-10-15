<?php 
  function checkIfEmailExists($db, $table_name, $email) {
    $stmt = $db->prepare("SELECT COUNT(*) FROM $table_name WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $count = $stmt->fetchColumn();
    
    // Return true if the email exists, otherwise false
    return $count > 0;
  }
?>