<?php

    require_once "Database.php";

    class Product extends Database
    {
        public function addProduct($request)
        {
            $product_name = $request['product_name'];
            $price = $request['price'];
            // $quantity = $request['quantity'];

            $sql = "INSERT INTO products (product_name, price) VALUES ('$product_name', '$price')";

            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            } else {
                die('Error adding a new product: ' . $this->conn->error);
            }
                
        }

        public function getAllProducts()
        {
            $sql ="SELECT * FROM products";

            if($result = $this->conn->query($sql)){
                return $result;
            }else {
                die("Error retriving all products: " . $this->conn->error);
            }
        }

        public function getProduct(){
            $id = $_GET['id'];

            $sql = "SELECT * FROM products 
            WHERE id = $id";
            
            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            } else{
                die("Error retriving the product: " . $this->conn->error);
            }
        }

        public function updateProduct($request, $id){
            session_start();
            $product_name = $request['product_name'];
            $price = $request['price'];
            $quantity = $request['quantity'];

            $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = $id";

            if($this->conn->query($sql)){
                // $_SESSION['product_name'] = $product_name;

                header('location: ../views/dashboard.php');
                exit;
            } else{
                die('Error updating the product: ' .$this->conn->error);
            }
            
        }

        public function deleteProduct($id){
            $sql = "DELETE FROM products WHERE id = $id";

            if($this->conn->query($sql)) {
                # if the query above is successful
                header('location: ../views/dashboard.php');
                exit;
            } else {
                die("Error in deleting the product: ". $this->conn->error);
            }
        }
    }

?>