<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <title>Pet lovers</title>
</head>

<body>
  <header>
    <div class="container text-center">
      <h1>Pet lovers</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row row-cols-4">
        <?php foreach ($productsCatalog as $product) : ?>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo $product->img ?>" class="card-img-top" alt="<?php echo $product->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $product->name ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->type ?></h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>

</body>

</html>