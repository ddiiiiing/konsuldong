<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Serif Display', serif;
        }
        .container-custom {
            margin-top: 20px;
        }
        .card-custom {
            background-color: #98abee;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
        }
        .status-progress {
            color: orange;
        }
        .status-complete {
            color: green;
        }
    </style>
</head>
<body>

<div class="container mt-5 container-custom">
    <div class="d-flex justify-content-start mb-3">
        <a href="/" class="btn btn-primary">&larr; Back to Dashboard</a>
    </div>
    <h2>Order History</h2>
    <?php if (!empty($orders)): ?>
        <div class="d-flex flex-wrap justify-content-center">
            <?php foreach ($orders as $order): ?>
                <div class="col-md-4">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title">ID Order: <?= $order['id_order'] ?></h5>
                            <p class="card-text">Pilih Paket: <?= $order['pilih_paket'] ?></p>
                            <p class="card-text">Deskripsi: <?= $order['deskripsi'] ?></p>
                            <p class="card-text">Pembayaran: <?= $order['payment'] ?></p>
                            <p class="card-text">
                                Status: 
                                <?php if ($order['status'] == 'On Progress'): ?>
                                    <span class="status-progress"><?= $order['status'] ?></span>
                                <?php else: ?>
                                    <span class="status-complete"><?= $order['status'] ?></span>
                                <?php endif; ?>
                            </p>
                            <p class="card-text">Tanggal Pesan: <?= date('d-m-Y', strtotime($order['tgl_pesan'])) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No orders found.</p>
    <?php endif; ?>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
