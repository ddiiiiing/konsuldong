<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Konsuldong</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .contact-section {
            padding: 50px 0;
        }
        .contact-card {
            margin: 20px 0;
        }
        .footer {
            background-color: #6c757d;
            color: white;
            padding: 20px 0;
        }
        .social-media a {
            color: white;
            margin: 0 10px;
        }
    </style>
</head>
<body>

<?php include 'layouts/navbar.php'; ?>

<div class="container contact-section text-center">
    <h2>Contact Us</h2>
    <p>Get in touch and let us know how we can help.</p>
    <div class="row">
        <div class="col-md-4 contact-card">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Address</h5>
                    <p class="card-text">Jl. Soekarno Hatta No. 15, Cempaka Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 65145</p>
                    <a href="#" class="btn btn-light">View On Map</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 contact-card">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">(+62)821873638<br>(+62)821873638<br>(+62)821873638</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 contact-card">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">konsul@academy.com<br>konsul@academy.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer text-center">
    <div class="container">
        <p>©2024 Konsuldong. PT Konsultasi Jaya Indonesia</p>
        <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i> @konsuldong.aca</a>
            <a href="#"><i class="fab fa-tiktok"></i> @konsuldong.aca</a>
            <a href="#"><i class="fab fa-youtube"></i> Konsuldong Academy</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
