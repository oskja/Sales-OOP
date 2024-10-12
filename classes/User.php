<?php

    require_once "Database.php";

    class User extends Database
    {
        public function store($request)
        {
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
            $username = $request['username'];
            $password = $request['password'];

            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

            if($this->conn->query($sql)){
                header('location: ../views'); //go to index.php or the login page
                exit;                         // same as die
            } else {
                die('Error creating the user: ' . $this->conn->error);
            }
                
        }

        public function login($request)
        {
            $username = $request['username'];
            $password = $request['password'];

            $sql = "SELECT * FROM users WHERE username = '$username'";

            $result = $this->conn->query($sql);

            if ($result->num_rows == 1){
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])){

                    session_start();
                    $_SESSION['id']         = $user['id'];
                    $_SESSION['username']   = $user['username'];
                    $_SESSION['full_name']  = $user['first_name'] . " " .$user['last_name'];

                    header('location: ../views/dashboard.php');
                    exit;
                }else{
                    die('Password is incorrect!');
                }

            }else{
                die('Username not found!');
            }
        }

        public function logout()
        {
            session_start();
            session_unset();
            session_destroy();

            header('location: ../views');
            exit;
        }

        public function getAllUsers()
        {
            $sql ="SELECT * FROM users";

            if($result = $this->conn->query($sql)){
                return $result;
            }else {
                die("Error retriving all users: " . $this->conn->error);
            }
        }

        public function getUser(){
            $id = $_SESSION['id'];

            $sql = "SELECT first_name, last_name, username FROM users 
            WHERE id = $id";
            
            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            } else{
                die("Error retriving the user: " . $this->conn->error);
            }
        }

        public function update($request, $files){
            session_start();
            $id = $_SESSION['id'];
            $first_name = $request['first_name'];
            $last_name = $request['last_name'];
            $username = $request['username'];

            $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $id";

            if($this->conn->query($sql)){
                $_SESSION['username'] = $username;
                $_SESSION['full_name'] = $first_name ." ".$last_name ;

                header('location: ../views/dashboard.php');
                exit;
            } else{
                die('Error updating the user: ' .$this->conn->error);
            }
            
        }

        public function delete(){
            session_start();
            $id = $_SESSION['id'];
            $sql = "DELETE FROM users WHERE id = $id";

            if($this->conn->query($sql)){
                $this->logout();
            }else{
                die("Error deleting your account: " .$this->conn->error);
            }
        }
    }

?>