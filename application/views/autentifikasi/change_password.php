
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="text-center">Ubah Password</h3>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_open('autentifikasi/changePassword'); ?>
                    <div class="form-group">
                        <label for="password1">Password Baru</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukkan password baru...">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password2">Ulangi Password</label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi password baru...">
                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit"
