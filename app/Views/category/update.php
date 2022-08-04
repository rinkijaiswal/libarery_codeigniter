<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layout/admin') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="container d-flex justify-content-center mt-5">
        <div class="row">
            <h3> Categories Update</h3>
            <form enctype="multipart/form-data" method="POST" action="<?= base_url("/category/update/".$id) ?>">
                <div class="form-group mb-2 d-flex justify-content-around align-items-center">
                    <image src="<?= base_url('/uploads/category/'.$category['image']) ?>" height="100px" width="100px" />
                    <div>
                        <label>Image</label>
                        <input class="form-control" type="file" name="image"/>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input value="<?= set_value('title', $category['title']) ?>" class="form-control" type="text" name="title"/>
                </div>
                <div class="form-group mb-2">
                    <label>Description</label>
                    <input value="<?= set_value('description', $category['description']) ?>" class="form-control" type="text" name="description"/>
                </div>
                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-primary">Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
