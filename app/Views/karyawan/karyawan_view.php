<?= $this->extend('template/admin_template'); ?>



<?= $this->section('content'); ?>

<div class="row">

    <div class="col-md-12">

        <form action="/karyawan/formtambah" method="post">
            <button class="btn btn-outline-primary mt-3 btn-sm">Tambah data</button>
        </form>
    </div>

    <div class="col-md-6">
        <h4 class="mt-3">Data Karyawan</h4>

        <?php if (session()->getFlashdata('pesan')) : ?>

        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>

        <?php endif; ?>


    </div>
    <form action="" method="post" class="col-md-6">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Cari nama...">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary mb-3" type="submit" name="submit">Search</button>
            </div>
        </div>
    </form>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th class="ro" scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $no = 1 + (5 * ($halaman - 1));

                foreach ($karyawan as $row) :

                ?>


                <tr class="small font-weight-bolder">
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_depan'] . " " . $row['nama_blkg'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td class="jk"><?= $row['jenis_kelamin'] ?></td>
                    <td class="jk"><?= $row['email'] ?></td>
                    <td><?= $row['telepon'] ?></td>
                    <td>
                        <a href="/karyawan/<?= $row['karyawan_id'] ?>" class="btn btn-outline-primary btn-sm">Detail</a>

                    </td>
                </tr>

                <?php
                endforeach;
                ?>
            </tbody>
        </table>

        <?= $pager->links('karyawan', 'karyawan_page'); ?>

    </div>
</div>


<?= $this->endSection(); ?>