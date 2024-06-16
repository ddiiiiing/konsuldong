<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - konsuldong.</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#">konsuldong.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/order/history">History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Order</a>
      </li>
      <li class="nav-item ml-3">
        <a class="btn btn-outline-primary btn-capsule" href="<?= base_url('auth/logout') ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5 position-relative">
    <img src="<?= base_url('img/asset1.svg') ?>" class="img-fluid img-left" alt="Deskripsi gambar">
    <div class="content-container">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di konsuldong</h1>
            <p class="lead">Ada tugas apa hari ini?</p>
            <a class="btn btn-primary btn-lg" href="/order/create" role="button">Book Sekarang</a>
        </div>
    </div>
</div>

<footer class="navbar navbar-expand-lg navbar-custom mt-5">
  <div class="container">
    <span class="navbar-text mx-auto">&copy; 2024 konsuldong. All rights reserved.</span>
  </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
