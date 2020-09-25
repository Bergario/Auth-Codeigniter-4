<?= $this->extend('template/template'); ?>



<?= $this->section('content'); ?>


<div class="container">

    <div class="row">

        <div class="col">

            <h1>Form <?= $kk ?> Karyawan</h1>


            <div class="col-md-6">
                <p>
                    <button class="btn btn-dark btn-sm" type="button"
                        onclick="window.location='../../karyawan/'">kembali</button>
                </p>
            </div>

            <div>

                <form action="<?= base_url('karyawan/') ?><?= $aksi ?>" method="POST" class="form-control-sm">



                    <div class="form-group row">
                        <input type="hidden" name="karyawan_id" value="<?= $karyawan_id ?>">
                        <label for="exampleFormControlInput1">Nama Depan</label>
                        <div class="col-sm-8">
                            <input name="nama_depan" class="form-control" type="text" value="<?= $nama_depan ?>">
                        </div>


                        <div class="form-group col-md-8">
                            <label for="exampleFormControlInput1">Nama Belakang</label>
                            <input name="nama_blkg" class="form-control" type="text" value="<?= $nama_blkg ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleFormControlInput1">Alamat</label>
                            <textarea name="alamat" class="form-control"><?= $alamat ?></textarea>
                        </div>

                        <div class="form-group col-md-8">
                            <p>Jenis Kelamin</p>

                            <div>
                                <label></label>

                                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($jenis_kelamin == "laki-laki") {

                                                                                                echo 'checked';
                                                                                            } ?>> Laki-laki
                            </div>

                            <div>
                                <label></label>
                                <input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($jenis_kelamin == "perempuan") {

                                                                                                echo 'checked';
                                                                                            } ?>> Perempuan
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleFormControlInput1">Email</label>
                            <input name="email" class="form-control" type="text" value="<?= $email ?>">
                        </div>

                        <div class="form-group col-md-8">
                            <label for="exampleFormControlInput1">No Telepon</label>
                            <input class="form-control" type="text" name="telp" value="<?= $telp ?>" autofocus>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleFormControlInput1">Departemen</label>
                            <input class="form-control" type="text" name="dept" value="<?= $dept ?>" autofocus>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="exampleFormControlInput1">Posisi</label>
                            <input class="form-control" type="text" name="posisi" value="<?= $posisi ?>" autofocus>


                            <input type="hidden" name="dibuat" value=<?= date("Y-m-d H:i:s") ?>>

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="status">Status:</label>

                            <select class="form-control" name="status">
                                <option value="On" <?php if ($status == "On") {
                                                        echo 'selected="true"';
                                                    } ?>>On</option>
                                <option value="Off" <?php if ($status == "Off") {
                                                        echo 'selected="true"';
                                                    } ?>>Off</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6"><button class="simpan btn btn-primary" type="submit"
                                value="Simpan"><?= $tombol ?></button></div>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>