<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <!-- logic flashdata -->
                                <?php if (session()->getFlashdata('pesan')) : ?> <div class="alert alert-success"
                                    role="alert">
                                    <?= session()->getFlashdata('pesan'); ?> </div>
                                <?php elseif (session()->getFlashdata('error')) : ?> <div class="alert alert-danger"
                                    role="alert">
                                    <?= session()->getFlashdata('error'); ?> </div>
                                <?php endif; ?>

                                <form class="user" method="post" action="<?= base_url(); ?>/user/proses_login">
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user  <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                                            id="email" placeholder="Enter Email Address..." name="email"
                                            value="<?= old('email'); ?>">
                                        <div class="invalid-feedback pl-3">
                                            <?= $validation->getError('email'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user   <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>"
                                            id="password" placeholder="Password" name="password">
                                        <div class="invalid-feedback pl-3">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="#" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="#" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="../user/registration">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>

<?= $this->endSection(); ?>