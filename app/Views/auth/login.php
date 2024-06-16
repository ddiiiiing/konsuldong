<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Adjustment</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'DM Serif Display', serif;
            color: white;
            padding-top: 80px; /* Ensure the content is not hidden behind the navbar */
        }
        .login-card {
            background: #0a1ed1;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            color: white;
            max-width: 400px;
            width: 100%;
        }
        .login-card h2 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
            text-align: center;
        }
        .form-control {
            border-radius: 10px;
            background-color: white;
            color: black;
        }
        .btn-primary {
            background-color: #6c757d;
            border: none;
            border-radius: 10px;
            padding: 0.75rem 1.25rem;
        }
        .btn-primary:hover {
            background-color: #5a6268;
        }
        .form-group label {
            font-weight: bold;
        }
        .forgot-password,
        .register-now {
            color: white;
        }
        .forgot-password:hover,
        .register-now:hover {
            text-decoration: underline;
        }
        .navbar-custom {
            background-color: #0a1ed1;
        }
        .btn-capsule {
            border-radius: 50px;
        }
        .btn-outline-white {
            border-color: white;
            color: white;
        }
        .btn-outline-white:hover {
            background-color: white;
            color: #0a1ed1;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .navbar-nav .nav-link:hover {
            color: #ccc; /* Change this to the hover color you prefer */
        }
        .navbar-nav .nav-item {
            margin-right: 15px; /* Add margin to the right of each nav item */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('img/logo.svg') ?>" alt="Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/products') ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/testimoni') ?>">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/contact') ?>">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if(session()->get('isLoggedIn')): ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-white btn-capsule" href="<?= base_url('/order/create') ?>">Create Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-white btn-capsule" href="<?= base_url('/auth/logout') ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-white btn-capsule" href="<?= base_url('/auth/login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-white btn-capsule ml-2" href="<?= base_url('/auth/register') ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="login-card">
    <h2>Login</h2>
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('/auth/login') ?>" method="post">
        <div class="form-group">
            <label for="text">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="form-group">
            <a href="<?= base_url('/auth/forgotPassword') ?>" class="forgot-password">Forgot Password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <p class="mt-3">Don't have an account? <a href="<?= base_url('/auth/register') ?>" class="register-now">Register now</a></p>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
