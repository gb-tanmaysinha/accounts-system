<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      // Default URL Configurations
      require_once('../../src/php/link-configurations.php');
      require_once('../../src/php/database.php');
      require_once('../../src/php/functions.php');

      // Page Meta Data
      require_once('../../src/renderers/meta_data.php');

      // Light-Dark Mode Script
      require_once('../../src/scripts/page_theme.php');

      // Favicon Assets
      require_once('../../src/renderers/favicons.php');

      // Stylesheets
      require_once('../../src/cascaders/fonts.php');
      require_once('../../src/cascaders/stylesheets.php'); 
    ?>
    <title>Register | Accounts System</title>
  </head>

  <!-- Render Page Content (Registration) -->
  <?php require_once('./register.php'); ?>

  <!-- Javascripts -->
  <?php require_once('../../src/scripts/js.php');?>
</html>