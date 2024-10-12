<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-primary">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control mb-2" required autofocus>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control mb-5">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    <p class="text-center mt-3 small btn btn-danger"><a href="register.php" class="text-decoration-none text-white">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>