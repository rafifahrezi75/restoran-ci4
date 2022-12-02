<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
<?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }
?>
</div>

<div class="col">
    <h3>Insert Data</h3>
</div>

<div class="col-8">
    <form action="<?= base_url()?>/admin/kategori/insert" method="post">
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" required class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" required class="form-control">
        </div>

        <div class="mb-3">
        <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>