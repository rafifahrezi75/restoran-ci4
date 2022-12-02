<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<?php 
    if (isset($_GET['page_page'])) {
        $page = $_GET['page_page'];
        $jumlah = 3;
        $no = ($jumlah * $page) - $jumlah + 1;
    }
    else{
        $no = 1;
    }
?>

<div class="row">
    <div class="col-12">
        <form action="<?= base_url()?>/admin/orderdetail/cari" method="post">
            <div class="mb-3 col-6 float-start">
                <label for="kategori" class="form-label">Awal</label>
                <input type="date" name="awal" required class="form-control">
            </div>
            
            <div class="mb-3 col-6 float-start">
                <label for="keterangan" class="form-label">Sampai</label>
                <input type="date" name="sampai" required class="form-control">
            </div>

            <div class="mb-3 ml-3">
            <input type="submit" name="cari" value="Cari">
            </div>
        </form>
    </div>
</div>

<div class="row">

    <div class="col">
        <h3> <?= $judul; ?> </h3>
    </div>

</div>

<div class="row mt-2">

<div class="col">
    <table class="table">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>

        </tr>
        <?php $no ?>
        <?php foreach($orderdetail as $key => $value): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $value['tglorder'] ?></td>
            <td><?= $value['menu'] ?></td>
            <td><?= $value['harga'] ?></td>
            <td><?= $value['jumlah'] ?></td>
            <td><?= $value['jumlah'] * $value['harga'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?= $pager->links('page', 'bootstrap') ?>

</div>

<?= $this->endSection() ?>