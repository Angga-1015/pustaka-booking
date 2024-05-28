
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="text-center">Lupa Password</h3>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_open('autentifikasi/lupaPassword'); ?>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email...">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Kirim Link Reset Password</button>
                    <?= form_close(); ?>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('autentifikasi'); ?>">Kembali ke halaman login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
