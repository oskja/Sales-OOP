<?php
include "../classes/Product.php";

$product = new Product;
$id = $_GET['id'];

$product->updateProduct($_POST, $id);

?>