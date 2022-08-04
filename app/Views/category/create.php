<?php $session = \Config\Services::session(); ?>

<?= $this->extend('admin/dashboard') ?>
<?= $this->section('right'); ?>
<div class="container-fluid">  
    
    <?php if($session->getTempdata('success')): ?>
        <div class="container px-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $session->getTempdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    <?php if($session->getTempdata('error')): ?>
        <div class="container px-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $session->getTempdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    
    
    <div class="container">
        <div class="row">
            <h3> Book Category </h3>
            <form enctype="multipart/form-data" method="POST"action="<?= base_url("/category/create") ?>">
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title"/>
                </div>
                <div class="form-group mb-2">
                    <label>Description</label>
                    <input class="form-control" type="text" name="description"/>
                </div><div class="form-group mb-2">
                    <label>Profile Pic</label>
                    <input class="form-control" type="file" name="image"/>
                </div>
                <din class="form-group">
                    <button type="submit" class="btn btn-primary">Submit </button>
                </din>

            </form>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>