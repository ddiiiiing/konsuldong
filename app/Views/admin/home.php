<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin konsuldong</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">konsuldong</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Second Row: Order List -->
<div class="container mt-5">
    <h2>Order List</h2>
    <?php if (!empty($orders)): ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-custom bg-white">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Order</th>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Pilih Paket</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Tanggal Pesan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= $order['id_order'] ?></td>
                            <td><?= $order['id_user'] ?></td>
                            <td><?= $order['user_nama'] ?></td> <!-- Display user name -->
                            <td><?= $order['pilih_paket'] ?></td>
                            <td><?= $order['deskripsi'] ?></td>
                            <td>
                                <?php if ($order['status'] == 'On Progress'): ?>
                                    <span class="status-progress"><?= $order['status'] ?></span>
                                <?php else: ?>
                                    <span class="status-complete"><?= $order['status'] ?></span>
                                <?php endif; ?>
                            </td>
                            <td><?= date('d-m-Y', strtotime($order['tgl_pesan'])) ?></td>
                            <td>
                                <a href="/admin/updateStatus/<?= $order['id_order'] ?>" class="btn btn-warning btn-sm">Change Status</a>
                                <a href="/admin/edit/<?= $order['id_order'] ?>" class="btn btn-info btn-sm">Edit</a>
                                <a href="/admin/delete/<?= $order['id_order'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
