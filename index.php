<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    include ('nav.php');
    ?>

    <div class="container mt 3">
        <h1>liste des produits</h1>
   <div class="row">
    <?php
    for ($i=0; $i <4 ; $i++) { 
    
    ?>
    <div class="col-3">
        <div class="card">
            <img src="https://picsum.photos/200/200.jpg" class="image-fluid" alt="description" >
            <div class="card-body"><h1 class="card-title"><p class="card-text">Lorem, ipsum dolor sit amet consectetur </p><a href="d" class="btn btn-success btn-sm">Details</a><a href="d" class="btn btn-success btn-sm"><i class="fas fa-shopping-cart"></i>Ajouter</a></div>
        </div>
    </div>
    <?php };?>
   </div>
   <?php 
   include"footer.php";
   ?>
   </div> 
</body>
</html>