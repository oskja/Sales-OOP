<?php
session_start();

require '../classes/Product.php';

$product_obj = new Product;

$product = $product_obj->getProduct();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Edit Product</title>
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
            <h2 class="text-center mb-4 text-warning"><i class="fa-regular fa-pen-to-square"></i> Edit Product</h2>

            <form action="../actions/edit-product.php?id=<?= $product['id'] ?>" method="post">
                <div class="row justify-content-center mb-3">

                    <div class="mb-3">
                        <label for="first-name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product['product_name'] ?>" maxlength="50" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label small fw-bold">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>" step="any" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="quantity" class="form-label fw-bold">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>" required>
                    </div>
                        <!-- <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a> -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-warning px-5 w-100">Edit</button>
                    </div>
                </div>
            </form>
        </div>

    </main>
    
</body>
</html>