<?php
session_start();

// hello change

require '../classes/User.php';
require '../classes/Product.php';


$product_obj = new Product;
$all_products = $product_obj->getAllProducts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
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
            <div class="col-6">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-start">Product List</h2>
                <a href="add-product.php" class="text-end h2 text-info fw-bold"><i class="fa-solid fa-plus"></i></a>
            </div>
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th><!-- for action buttons --></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($product = $all_products->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['product_name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <a href="edit-product.php?id=<?= $product['id']; ?>" class="btn btn-outline-warning" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="../actions/delete-product.php?id=<?= $product['id']; ?>" class="btn btn-outline-danger" title="Delete"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>

</body>
</html>