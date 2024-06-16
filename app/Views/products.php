<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konsuldong Pricing Plans</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'DM Serif Display', sans-serif;
  }
  .navbar {
    background-color: #0033cc;
  }
  .navbar a {
    color: white;
  }
  .pricing-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    padding-bottom: 20px; /* Added padding below */
  }
  .card {
    background-color: #e6e6ff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    margin: 10px;
    text-align: center;
    margin-bottom: 20px; /* Added margin-bottom for spacing */
  }
  .card h3 {
    margin-bottom: 15px;
  }
  .card p {
    margin-bottom: 15px;
  }
  .card button {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 10px 20px;
    text-transform: uppercase;
    cursor: pointer;
  }
  .card .original-price {
    text-decoration: line-through;
    color: #f0f0f0;
  }
  .card .new-price {
    font-size: 1.5em;
    font-weight: bold;
  }
  .card .badge-favorite {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ffcc00;
    color: black;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
  }
  .card .stock-info {
    color: red;
    font-weight: bold;
  }
  .card-center {
    transform: scale(1.1);
  }

  a {
    text-decoration: none;
    color: #f0f0f0;
  }
  .btn-primary a {
    color: white;
  }
</style>
</head>
<body>

<?php include('layouts/navbar.php'); ?>

<div class="container text-center mt-5">
  <h1>Pilih Plan Konsulmu</h1>
  <p>Semua yang kamu butuhkan untuk sukses mengerjakan tugas, dimulai dari memilih produk kami!</p>
</div>

<div class="container pricing-container">
  <div class="row">
    <div class="col-md-4">
      <div class="card position-relative">
        <div class="card-body">
          <h3 class="card-title">Masih Enteng</h3>
          <p class="card-text">buat yang masih gampang tapi males ngerjain</p>
          <p class="original-price">Rp 80.000</p>
          <p class="new-price">Rp 50.000</p>
          <p>1 hari konsul</p>
          <p>Full bimbingan</p>
          <p>Free 1x revisi</p>
          <p>Record konsultasi</p>
          <button class="btn btn-primary"><a href="<?= base_url('/order/create') ?>">Beli Paket</a></button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-center position-relative">
        <div class="card-body">
          <div class="badge-favorite">favorite!</div>
          <h3 class="card-title">Agak Susah</h3>
          <p class="card-text">tugas mulai ribet</p>
          <p class="original-price">Rp 110.000</p>
          <p class="new-price">Rp 75.000</p>
          <p>3 hari konsul</p>
          <p>Full bimbingan</p>
          <p>Free 2x revisi</p>
          <p>Record konsultasi</p>
          <button class="btn btn-primary"><a href="<?= base_url('/order/create') ?>">Beli Paket</a></button>
          <p class="stock-info">Segera Habis🔥</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card position-relative">
        <div class="card-body">
          <h3 class="card-title">Pusing Banget</h3>
          <p class="card-text">buntu banget, ternyata se susah itu?!</p>
          <p class="original-price">Rp 130.000</p>
          <p class="new-price">Rp 100.000</p>
          <p>5 hari konsul</p>
          <p>Full bimbingan</p>
          <p>Free 5x revisi</p>
          <p>Record konsultasi</p>
          <button class="btn btn-primary"><a href="<?= base_url('/order/create') ?>">Beli Paket</a></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
