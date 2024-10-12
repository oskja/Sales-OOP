<?php
session_start();

require '../classes/Product.php';

$product_obj = new Product;

// $product = $product_obj->addProduct();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>New Product</title>
</head>
<body>
    <nav class="navbar navbar-expand" style="margin-bottom:80px;">
        <div class="container fw-bold">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3 text-dark"><i class="fa-solid fa-house"></i></h1>
            </a>
            <div class="navbar-nav w-100 d-flex justify-content-between">
                <span class="navbar-text mx-auto">Welcome, <?= $_SESSION['username'] ?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0 h3">
                        <i class="fa-solid fa-user-xmark"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-4">
            <h2 class="text-center mb-4 text-info"><i class="fa-solid fa-box"></i> Add Product</h2>
            <form action="../actions/add-product.php" method="POST">
                <div class="mb-3">
                    <label for="product-name" class="form-label small fw-bold">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" max="50" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label small fw-bold">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                        <!-- <a href="products.php" class="btn btn-outline-success">Cancel</a> -->
                        <button type="submit" class="btn btn-info fw-bold px-4" name="btn_add">Add</button>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>