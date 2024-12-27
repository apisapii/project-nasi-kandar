<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Header -->
     <?php include "header.php"; ?>
<!-- End Header -->
<div class="container-lg">
  <div class="row">
    <!-- Sidebar -->
    <?php include "sidebar.php"; ?>
    <!-- End Sidebar  -->

    <!-- Content -->
    <?php if echo (isset($_GET['x']) && $_GET['x']=='home'){
      include "home.php";
    }elseif (isset($_GET['x']) && $_GET['x']=='order'){
      include "order.php"; 
    }elseif (isset($_GET['x']) && $_GET['x']=='product'){
      include "product.php"; 
    }elseif (isset($_GET['x']) && $_GET['x']=='customer'){
      include "customer.php"; 
    }elseif (isset($_GET['x']) && $_GET['x']=='report'){
      include "report.php"; 
    ?>
    <!-- End Content -->
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
