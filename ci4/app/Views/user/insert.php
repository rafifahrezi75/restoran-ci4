<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
<?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        
        foreach ($error as $key => $value) {
            echo $key . "=>" . $value;
            echo "<br>";
        }

        echo '</div>';
    }
?>
</div>

<div class="col">
    <h3>Insert Data</h3>
</div>

<div class="col-8">
    <form action="<?= base_url()?>/admin/user/insert" method="post">
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" name="user" required class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" required class="form-control">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Level</label>
            <select class="form-select" name="level" id="idkategori">
                <?php foreach($level as $key) : ?>
                <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach; ?>
            </select>

        <div class="mb-3 mt-3">
        <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>