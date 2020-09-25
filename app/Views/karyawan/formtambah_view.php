<?= $this->extend('template/admin_template'); ?>



<?= $this->section('content'); ?>


<div class="row">

    <div class="col">
        <p>
            <button class="btn btn-dark btn-sm mt-3" type="button"
                onclick="window.location='/karyawan/<?= $karyawan['karyawan_id'] ?>'">kembali</button>
        </p>

        <h4 class="mb-5">Form <?= $kk ?> Karyawan</h4>
        <form action="<?= base_url('karyawan/') ?><?= '/' . $aksi ?><?= '/' . $karyawan['karyawan_id'] ?>" method="post"
            enctype="multipart/form-data">

            <?= csrf_field(); ?>

            <input type="hidden" name="karyawan_id" value="<?= $karyawan['karyawan_id'] ?>">

            <div class="form-group row">
                <label for="nama_depan" class="col-sm-2 col-form-label">Nama Depan</label>
                <div class="col-sm-6">
                    <input type="text"
                        class="form-control <?= ($validation->hasError('nama_depan')) ? 'is-invalid' : '' ?>" id="nama"
                        name="nama_depan"
                        value="<?= (old('nama_depan')) ? old('nama_depan') : $karyawan['nama_depan'] ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_depan'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Belakang</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama_blkg"
                        value="<?= (old('nama_blkg')) ? old('nama_blkg') : $karyawan['nama_blkg'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="alamat"
                        name="alamat"><?= (old('alamat')) ? old('alamat') : $karyawan['alamat'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                        id="staticEmail" name="email" value="<?= $karyawan['email'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="telp" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="telp" name="telp"
                        value="<?= (old('telp')) ? old('telp') : $karyawan['telepon'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-6">
                    <select class="form-control" name="jenis_kelamin">
                        <option value="laki-laki" <?php if ($karyawan['jenis_kelamin'] == "laki-laki") {
                                                        echo 'selected="true"';
                                                    } ?>>Laki-laki</option>
                        <option value="perempuan" <?php if ($karyawan['jenis_kelamin'] == "perempuan") {
                                                        echo 'selected="true"';
                                                    } ?>>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-6">
                    <select class="form-control" name="status">
                        <option value="On" <?php if ($karyawan['status'] == "On") {
                                                echo 'selected="true"';
                                            } ?>>On</option>
                        <option value="Off" <?php if ($karyawan['status'] == "Off") {
                                                echo 'selected="true"';
                                            } ?>>Off</option>
                    </select>
                </div>
                <input type="hidden" name="created_at" value="<?= $karyawan['created_at'] ?>">
                <input type="hidden" name="updated_at" value="<?= $karyawan['updated_at'] ?>">
                <input type="hidden" name="gambar_lama" value="<?= $karyawan['gambar'] ?>">
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Foto Profil</label>
                <div class="col-sm-2">
                    <img src="<?= base_url() . "/img/" . $karyawan['gambar'] ?>" class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-4">
                    <div class="custom-file">
                        <input type="file"
                            class="custom-file-input  <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>"
                            id="gambar" name="gambar" onchange="previewimg()">
                        <label class="custom-file-label" for="gambar">Pilih Foto</label>
                        <div class="invalid-feedback">
                            <?= $validation->getError('gambar'); ?>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <button type="submit" class="simpan btn btn-primary"><?= $tombol ?></button>

            </div>

        </form>












    </div>

</div>



<?= $this->endSection(); ?>