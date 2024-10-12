<?php

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
    <title>Registration</title>
</head>
<body>
    <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center text-danger"><i class="fa-solid fa-user-plus"></i> Registration</h1>
        </div>
        <div class="card-body">
            <form action="../actions/register.php" method="post">
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
                </div>
                <div class="mb-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                    <!-- <div class="form-text" id="password-info">
                        Password must be at least 8 characters long.
                    </div> -->
                </div>
                <button type="submit" class="btn btn-danger w-100">Register</button>
                    </form>
                    <p class="text-center mt-3 small">Registered already? <a href="../views">Log in.</a></p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>