<?php 
$show_login = true;
if (isset($_SESSION['start'])){$show_login = false;}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajout du boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Trombinoscope</title>
</head>
  <body>
    <header class="d-flex justify-content-center">
      <h1>Trombinoscope </h1>
      <?php if ($show_login) :?>
      <a href="../Views/login.php">connection</a>
      <?php endif; ?>
    </header>
