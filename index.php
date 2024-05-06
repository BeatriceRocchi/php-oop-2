<?php

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/data/db.php';

var_dump($productsCatalog[1]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- FontAwesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <title>Pet lovers</title>
</head>

<body>
  <header>
    <div class="container d-flex justify-content-center align-items-center">
      <i class="fa-solid fa-paw"></i>
      <h1>Pet lovers</h1>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="row row-cols-4">
        <?php foreach ($productsCatalog as $product) : ?>
          <div class="col my-3">
            <div class="card h-100">
              <img src="<?php echo $product->img ?>" class="card-img-top" alt="<?php echo $product->name ?>">
              <div class="card-body">
                <div class="category-icons-box text-end">
                  <?php if ($product->category === 'cane') : ?>
                    <i class="fa-solid fa-dog"></i>
                  <?php elseif ($product->category === 'gatto') : ?>
                    <i class="fa-solid fa-cat"></i>
                  <?php elseif ($product->category === 'roditore') : ?>
                    <i class="fa-solid fa-otter"></i>
                  <?php endif; ?>
                </div>
                <h5 class="card-title text-capitalize"><?php echo $product->name ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary text-capitalize"><?php echo $product->type ?></h6>

                <div class="d-flex align-items-baseline">
                  <?php for ($i = 0; $i < $product->stars; $i++) : ?>
                    <i class="fa-solid fa-paw pe-1"></i>
                  <?php endfor; ?>
                  <p class="mb-1 fst-italic"><?php echo $product->getReviewsInfo() ?></p>
                </div>

                <p class="card-text"><?php echo $product->getFullInfo() ?></p>
                <div class="price-box">&euro; <?php echo number_format($product->fullprice, 2) ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

</body>

</html>