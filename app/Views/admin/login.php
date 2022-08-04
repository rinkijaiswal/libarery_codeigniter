<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layout/admin') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    
    <?php if($session->getFlashdata('error')): ?>
        <div class="container px-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $session->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    
<div class="container d-flex justify-content-center mt-5">
    <div class="row">
        <h3> Login </h3>
        <form method="POST" action="<?= base_url('/admin/login')?>">
            <div class="form-group mb-2">
                <label>Email</label>
                <input type="text" class="form-control" name="email" required/>
            </div>
            <div class="form-group mb-2">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required/>
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
