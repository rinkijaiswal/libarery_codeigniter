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
            <h3> Book Create </h3>
            <form enctype="multipart/form-data" method="POST" action="<?= base_url("/book/create") ?>">
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
                <div class="form-group mb-2">
                    <label>Author</label>
                    <input class="form-control" type="text" name="author"/>
                </div>
                <div class="form-group mb-2">
                    <label>Availability</label>
                    <input class="form-control" type="text" name="availability"/>
                </div>
                <div class="form-group mb-2">
                    <label>Language</label>
                    <input class="form-control" type="text" name="language"/>
                </div>
                <div class="form-group mb-2">
                    <label>Category</label>
                    <select name="category" class="form-control">
                        <?php foreach($categories as $category): ?>
                        <option value="<?= $category['title'] ?>"><?= $category['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Pages</label>
                    <input class="form-control" type="text" name="pages"/>
                </div>
                <div class="form-group mb-2">
                    <label>ISBN Number</label>
                    <input class="form-control" type="text" name="isbn_no"/>
                </div>
                <div class="form-group mb-2">
                    <label>Number Of Copy</label>
                    <input class="form-control" type="text" name="no_copy"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit </button>
                </div>

            </form>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>
