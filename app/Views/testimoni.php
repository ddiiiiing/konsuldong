<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konsuldong Pricing Plans</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;700&display=swap" rel="stylesheet">
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
  }
  .card {
    background-color: #e6e6ff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    margin: 10px;
    text-align: center;
    margin-bottom: 20px;
    font-family: 'Inter', sans-serif;
    font-weight: 700; /* Set font weight to 700 for bolder text */
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
  .testimonial-container {
    text-align: center;
    margin: 50px 0;
  }
  .testimonial-container h2 {
    margin-bottom: 30px;
    font-size: 2.5rem;
  }
  .filter-buttons {
    margin-bottom: 30px;
  }
  .filter-buttons button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 20px;
    cursor: pointer;
  }
  .filter-buttons button.active {
    background-color: #ffcc00;
    color: black;
  }
  .testimonial-card {
    background-color: #0033cc;
    color: white;
    border-radius: 15px;
    padding: 20px;
    margin: 10px;
    text-align: center;
    position: relative;
    font-family: 'Inter', sans-serif;
    font-weight: 700; /* Set font weight to 700 for bolder text */
  }
  .testimonial-card .badge {
    position: absolute;
    top: -15px; /* Adjusted to align with the badge-favorite */
    left: 50%;
    transform: translateX(-50%);
    background-color: #ffcc00;
    color: black;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
  }
  .testimonial-card .user {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
  }
  .testimonial-card .user img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin-right: 10px;
  }
  .testimonial-card .user-info {
    display: inline-block;
    text-align: center;
  }
  .testimonial-card .user-info h5 {
    margin: 0;
    font-size: 1rem;
  }
  .testimonial-card .user-info p {
    margin: 0;
    font-size: 0.875rem;
    color: #ffcc00;
  }

  .original-price {
      color: white;
  }
</style>
</head>
<body>

<?php include('layouts/navbar.php'); ?>

<div class="container testimonial-container">
  <h2>Apa kata mereka?</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="badge">Mahasiswa</div>
        <p>"Tadinya mau pake joki tugas karena udah males ngerjain tugas, tapi terlintas dipikiran kalau joki tugas gak bikin pinter, akhirnya nyobain konsultasi tugas di konsuldong. Awalnya takut ga ngerti diajarin sama mentor, ternyata enak banget aku yg otaknya lemot gampang nangkep, dan juga harganya affordable! worth to try."</p>
        <div class="user">
          <div class="user-info">
            <h5>Rika Salsabila</h5>
            <p>Mahasiswa Statistika</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="badge">Siswa</div>
        <p>"Tadinya mau pake joki tugas karena udah males ngerjain tugas, tapi terlintas dipikiran kalau joki tugas gak bikin pinter, akhirnya nyobain konsultasi tugas di konsuldong. Awalnya takut ga ngerti diajarin sama mentor, ternyata enak banget aku yg otaknya lemot gampang nangkep, dan juga harganya affordable! worth to try."</p>
        <div class="user">
          <div class="user-info">
            <h5>Rika Salsabila</h5>
            <p>Mahasiswa Statistika</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="badge">Mahasiswa</div>
        <p>"Tadinya mau pake joki tugas karena udah males ngerjain tugas, tapi terlintas dipikiran kalau joki tugas gak bikin pinter, akhirnya nyobain konsultasi tugas di konsuldong. Awalnya takut ga ngerti diajarin sama mentor, ternyata enak banget aku yg otaknya lemot gampang nangkep, dan juga harganya affordable! worth to try."</p>
        <div class="user">
          <div class="user-info">
            <h5>Rika Salsabila</h5>
            <p>Mahasiswa Statistika</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="badge">Siswa</div>
        <p>"Tadinya mau pake joki tugas karena udah males ngerjain tugas, tapi terlintas dipikiran kalau joki tugas gak bikin pinter, akhirnya nyobain konsultasi tugas di konsuldong. Awalnya takut ga ngerti diajarin sama mentor, ternyata enak banget aku yg otaknya lemot gampang nangkep, dan juga harganya affordable! worth to try."</p>
        <div class="user">
          
          <div class="user-info">
            <h5>Rika Salsabila</h5>
            <p>Mahasiswa Statistika</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="badge">Mahasiswa</div>
        <p>"Tadinya mau pake joki tugas karena udah males ngerjain tugas, tapi terlintas dipikiran kalau joki tugas gak bikin pinter, akhirnya nyobain konsultasi tugas di konsuldong. Awalnya takut ga ngerti diajarin sama mentor, ternyata enak banget aku yg otaknya lemot gampang nangkep, dan juga harganya affordable! worth to try."</p>
        <div class="user">
          
          <div class="user-info">
            <h5>Rika Salsabila</h5>
            <p>Mahasiswa Statistika</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
