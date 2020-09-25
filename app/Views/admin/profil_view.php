<?= $this->extend('template/admin_template'); ?>


<?= $this->section('content'); ?>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4 mt-3">
            <img src="<?= base_url(); ?>/img/default.png" class="card-img rounded-circle" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h6 class="card-title">My Profil</h6>
                <h5 class="card-title"><?= $data['nama']; ?></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>