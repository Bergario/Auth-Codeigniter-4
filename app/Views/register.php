    <?= $this->extend('template/login_template'); ?>

    <?= $this->section('content'); ?>


    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" method="post" action="<?= base_url(); ?>/user/proses_register">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user  <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>"
                                        id="nama" name="nama" placeholder="Full Name" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback pl-3">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                                        id="email" name="email" placeholder="Email Address"
                                        value="<?= old('email'); ?>">
                                    <div class="invalid-feedback pl-3">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control form-control-user <?= ($validation->hasError('password1')) ? 'is-invalid' : '' ?>"
                                            id="password" placeholder="Password" name="password1">
                                        <div class="invalid-feedback pl-3">
                                            <?= $validation->getError('password1'); ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="password"
                                            class="form-control form-control-user <?= ($validation->hasError('password2')) ? 'is-invalid' : '' ?>"
                                            placeholder="Repeat Password" name="password2">
                                        <div class="invalid-feedback pl-3">
                                            <?= $validation->getError('password2'); ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="../user/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                </div>
            </div>
        </div>

    </div>

    <?= $this->endSection(); ?>