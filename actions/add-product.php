<?php
session_start();

include "../classes/Product.php";

$product_obj = new Product;

$product_obj->addProduct($_POST);

// function getAllSections()
// {
//     $conn = connection();
//     $sql = "SELECT * FROM sections";

//     if ($result = $conn->query($sql)) {
//         return $result;
//     } else {
//         die("Error retrieving all sections: " . $conn->error);
//     }
// }

// if(isset($_POST['btn_add'])){
//     $product_name = $_POST['product_name'];
//     $price = $_POST['price'];
//     addProduct($request);
// }
?>