<?php
  session_start();
  $page=$_GET["page"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/general.css">

  <title>E-cinema | where Your film starts</title>
</head>
<body>
  <header>
    <?php
      require_once("php/header.php");
    ?>
  </header>

  <main class="main--part">
    <?php
      if($page=="home"){
        require_once("php/home.php");
      }else if($page==="movies"){
        require_once("php/movies.php");
      }
    ?>
  </main>


  <!-- ICONS -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>