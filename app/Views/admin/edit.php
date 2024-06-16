<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet"> <!-- Link to Montserrat font -->
</head>
<body>

<div class="container mt-5">
    <h2>Edit Order</h2>
    <form action="/admin/update/<?= $order['id_order'] ?>" method="post">
        <div class="form-group">
            <label for="pilih_paket">Pilih Paket</label>
            <select class="form-control" id="pilih_paket" name="pilih_paket" required>
                <option value="Masih Enteng" <?= $order['pilih_paket'] == 'Masih Enteng' ? 'selected' : '' ?>>Masih Enteng</option>
                <option value="Agak Susah" <?= $order['pilih_paket'] == 'Agak Susah' ? 'selected' : '' ?>>Agak Susah</option>
                <option value="Pusing Banget" <?= $order['pilih_paket'] == 'Pusing Banget' ? 'selected' : '' ?>>Pusing Banget</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $order['deskripsi'] ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="On Progress" <?= $order['status'] == 'On Progress' ? 'selected' : '' ?>>On Progress</option>
                <option value="Selesai" <?= $order['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/admin" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
