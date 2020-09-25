<?= $this->extend('template/admin_template'); ?>

<?= $this->section('content'); ?>

<div class="row">

    <div class="col">

        <h3 class="mt-3"><?= $title ?></h3>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="kotak row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url() . "/img/" . $karyawan['gambar']; ?>"
                        class="card-img rounded-circle mt-2 ml-2" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $karyawan['nama_depan'] . " " . $karyawan['nama_blkg'] ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Member since
                                <?= $karyawan['created_at']; ?></small></p>


                        <form action="/karyawan/formtambah/<?= $karyawan['karyawan_id'] ?>" method="post"
                            class="d-inline">
                            <button class="btn btn-warning">Edit</button>
                        </form>
                        <form action="/karyawan/<?= $karyawan['karyawan_id'] ?>" method="post" class="d-inline mb-2">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah anda ingin menghapus?')">Delete</button>
                        </form>
                        <br>
                        <a href="/karyawan/">Kembali ke daftar karyawan</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



<?= $this->endSection(); ?>