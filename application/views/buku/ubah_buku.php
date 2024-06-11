<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <form action="<?= base_url('buku/ubahBuku/' . $buku[0]['id']); ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $buku[0]['id']; ?>">

                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $buku[0]['judul_buku']; ?>" required>
                        <?= form_error('judul_buku', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select name="id_kategori" id="id_kategori" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>" <?= ($k['id'] == $buku[0]['id_kategori']) ? 'selected' : ''; ?>>
                                    <?= $k['kategori']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('id_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku[0]['pengarang']; ?>" required>
                        <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku[0]['penerbit']; ?>" required>
                        <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Terbit</label>
                        <select name="tahun" id="tahun" class="form-control" required>
                            <option value="">Pilih Tahun</option>
                            <?php for ($i = date('Y'); $i > 1000; $i--) : ?>
                                <option value="<?= $i; ?>" <?= ($i == $buku[0]['tahun_terbit']) ? 'selected' : ''; ?>>
                                    <?= $i; ?>
                                </option>
                            <?php endfor; ?>
                        </select>
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $buku[0]['isbn']; ?>" required>
                        <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $buku[0]['stok']; ?>" required>
                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <input type="hidden" name="old_pict" value="<?= $buku[0]['image']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
