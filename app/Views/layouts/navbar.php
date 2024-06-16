<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
    <style>
        /* Animasi floating */
        @keyframes floatAnimation {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .floating-image {
            animation: floatAnimation 3s infinite;
            position: absolute;
            left: 0;
            top: 20%; /* Adjusted to move image slightly upward */
            transform: translateY(-50%);
            width: 500px; /* Increased width */
            height: 500px; /* Increased height */
        }

        .navbar-nav {
            flex-direction: row;
        }

        .nav-item {
            margin-left: 15px;
            margin-right: 15px;
        }

        .container {
            margin-top: 100px;
        }

        .btn-outline-white {
            color: white;
            border: 1px solid white;
            background-color: transparent;
        }

        .btn-outline-white:hover {
            color: #007bff;
            background-color: white;
            border-color: white;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="<?= base_url('/') ?>">
    <img src="<?= base_url('img/logo.svg') ?>" alt="Logo" style="height: 40px;"> <!-- Adjusted height -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/products') ?>">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/testimoni') ?>">Testimoni</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/contact') ?>">Kontak Kami</a>
      </li>
      <?php if(session()->get('isLoggedIn')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/order/history') ?>">History</a>
      </li>
      <?php endif; ?>
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
</nav>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
