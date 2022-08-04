<?php $session = \Config\Services::session() ?>
<?php $this-> extend('layout/base')?>
<?php $this->section('content'); ?>
<div class="container my-3">
    <?php if($session->getTempdata('success')): ?>
        <div class="container px-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $session->getTempdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    <div class="row py-5 px-5" style="background: #fafafa">
        <div class="d-flex justify-content-center">
            <h3 class="text-center" style="border-bottom: 5px solid blue">All Categories</h3>
        </div>
        <?php foreach($categories as $cat): ?>
        <div class="g-3 col-12 col-sm-6 col-md-4 justify-content-center align-items-center">
            <a href="<?= base_url('/showcategory/'.$cat['title']) ?>" ><div class="card bg-dark text-white" style="width:80%">
                <img height="200px" width='100%' src="<?= base_url('/uploads/category/'.$cat['image']) ?>" class="card-img" alt="...">
                <div class="card-img-overlay" style="background: rgba(0,0,0,0.5)">
                  <h5 class="card-title"><?= $cat['title'] ?></h5>
                  <p class="card-text"><?= $cat['description'] ?></p>
                </div>
                </div></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php $this->endSection(); ?>