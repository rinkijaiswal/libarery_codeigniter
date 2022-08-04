<?php $session = \Config\Services::session(); ?>
<?= $this->extend('admin/dashboard') ?>
<?= $this->section('right'); ?>
<div class="container-fluid">
    <?php if($session->getTempdata('success')): ?>
        <div class="container px-5 mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $session->getTempdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <h3>All Category</h3>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $category): ?>
                    <tr>
                        <td><?= $category['id'] ?></td>
                        <td>
                            <img src="<?= base_url('/uploads/category/'.$category['image']) ?>" height="150" width="150" />
                        </td>
                        <td><?= $category['title'] ?></td>
                        <td><?= $category['description'] ?></td>
                        
                        <td><a class="btn btn-primary" href="<?= '/category/update/'.$category['id'] ?>">Update</a></td>
                        <td><a class="btn btn-danger" href="<?= '/category/delete/'.$category['id'] ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class='row'>
                <?php
                    $pager->setPath('/category/read/');
                    echo $pager->links();
                ?>
            </div>
    </div>
</div>
<?= $this->endSection(); ?>