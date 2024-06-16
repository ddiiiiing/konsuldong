<?php include('layouts/navbar.php'); ?>

<img src="<?= base_url('img/asset1.svg') ?>" class="floating-image" alt="Sample Image">

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-8 offset-md-4">
            <div class="jumbotron">
                <h1 class="display-4 mb-4">Jurus Jitu Taklukkan 
                Tugas di konsuldong.</h1>
                <p class="lead mb-4">Kesulitan menyelesaikan tugas? Konsultasi dengan pakar tugas kami yang 
                  berpengalaman dan dapatkan bantuan yang anda butuhkan untuk mencapai nilai A!"</p>
                <a class="btn btn-primary btn-lg" href="<?= base_url('/auth/register') ?>" role="button">Daftar Disini</a>
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
