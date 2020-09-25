<?= $this->extend('template/admin_template'); ?>

<?= $this->section('content'); ?>

<form action="">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Absensi</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $no = 1;

                    foreach ($karyawan as $row) :


                    ?>

                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $row['nama_depan'] . " " . $row['nama_blkg']; ?></td>
                        <td>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Status" name="status" value="H" class="custom-control-input">
                                <label class="custom-control-label">H</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Status" name="status" value="A" class="custom-control-input">
                                <label class="custom-control-label">A</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Status" name="status" value="C" class="custom-control-input">
                                <label class="custom-control-label">C</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="Status" name="status" value="I" class="custom-control-input">
                                <label class="custom-control-label">I</label>
                            </div>

                        </td>
                        <td>@mdo</td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                    <tr>
                        <td>
                            <a href="" class="btn btn-primary">Save</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</form>


<?= $this->endSection(); ?>