<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Serif Display', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .card {
            background-color: #1D24CA;
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            padding: 2rem;
            color: white;
            width: 100%;
            max-width: 500px;
        }
        .card-header {
            background-color: #1D24CA;
            border-bottom: 1px solid #dee2e6;
            border-radius: 0.5rem 0.5rem 0 0;
            padding: 1rem;
        }
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Create Order</h2>
    </div>
    <div class="card-body">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $('#successModal').modal('show');
                    setTimeout(function(){
                        window.location.href = "/user/dashboard"; // Ubah sesuai dengan URL halaman utama user
                    }, 0); // Redirect langsung
                });
            </script>
        <?php endif; ?>
        <form action="/order/store" method="post">
            <div class="form-group">
                <label for="pilih_paket">Pilih Paket</label>
                <select class="form-control" id="pilih_paket" name="pilih_paket" required>
                    <option value="Masih Enteng">Masih Enteng</option>
                    <option value="Agak Susah">Agak Susah</option>
                    <option value="Pusing Banget">Pusing Banget</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Hukum">Hukum</option>
                    <option value="DKV">DKV</option>
                    <option value="Ilmu Seni">Ilmu Seni</option>
                </select>
            </div>
            <div class="form-group">
                <label for="payment">Metode Pembayaran</label>
                <select class="form-control" id="payment" name="payment" required>
                    <option value="OVO">OVO</option>
                    <option value="Gopay">Gopay</option>
                    <option value="Dana">Dana</option>
                    <option value="Transfer Manual">Transfer Manual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
