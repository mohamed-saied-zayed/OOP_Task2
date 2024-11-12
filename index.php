<?php
require_once 'Product.php';
require_once 'Book.php';
require_once 'BabyCar.php';
$book1 = new Book();
$book1->name = 'php';
$book1->setPrice("150");
$book1->description = "PHP & OOP";
$book1->writer = 'Mohamed';
$book1->color = 'black';
$book1->supplier = 'egypt';
$book1->setPublisher('Dar Alamal 1');
$book1->setPublisher('Dar Alamal 2');
$book1->setPublisher('Dar Alamal 3');

$babycar1 = new BabyCar();
$babycar1->name = 'Belecoo';
$babycar1->description = "Baby Stroller With A Flip Arm";
$babycar1->uploadImage("uploads/babycar.jpg");
$babycar1->setMaterials("Carbon");
$babycar1->setMaterials("High Carbon Steel");
$babycar1->setMaterials("Carbon Alum");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="<?=$book1->uploadImage("uploads/php.jpeg");?>" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title"><?=$book1->name;?></h5>
        <p class="card-text"><?="Description :".$book1->description;?></p>
        <p class="card-text"><?="Writer :".$book1->writer;?></p>
        <p class="card-text"><?="Color :".$book1->color;?></p>
        <p class="card-text"><?="Supplier :".$book1->supplier;?></p>
        <p class="card-text"><?="Publisher :".$book1->choosePublisher();?></p>
        <p class="card-text"><?="AllPublishers : ".implode(' , ',$book1->showAllPublishers())?></p>
        <p class="card-text"><?="Price :".$book1->calcPrice("20");?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="<?=$babycar1->uploadImage("uploads/babycar.jpg");?>" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title"><?=$babycar1->name;?></h5>
        <p class="card-text"><?="Description :".$babycar1->description;?></p>
        <p class="card-text"><?="Matrial :".$babycar1->displayMaterials();?></p>
        <p class="card-text"><?="Final Price After Tax :".$babycar1->getFinalPrice("200");?></p>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


