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
                <h3>All Books</h3>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Availability</th>
                        <th>Language</th>
                        <th>Category</th>
                        <th>Pages</th>
                        <th>ISBN Number</th>
                        <th>Number Of Copy</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($books as $blog): ?>
                    <tr>
                        <td><?= $blog['id'] ?></td>
                        <td>
                            <img src="<?= base_url('/uploads/books/'.$blog['image']) ?>" height="150" width="150" />
                        </td>
                        <td><?= $blog['title'] ?></td>
                        <td><?= $blog['description'] ?></td>
                        <td><?= $blog['author'] ?></td>
                        <td><?= $blog['availability'] ?></td>
                        <td><?= $blog['language'] ?></td>
                        <td><?= $blog['category'] ?></td>
                        <td><?= $blog['pages'] ?></td>
                        <td><?= $blog['isbn_no'] ?></td>
                        <td><?= $blog['no_copy'] ?></td>
                        <td><a class="btn btn-primary" href="<?= '/book/update/'.$blog['id'] ?>">Update</a></td>
                        <td><a class="btn btn-danger" href="<?= '/book/delete/'.$blog['id'] ?>">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class='row'>
                <?php
                    $pager->setPath('/book/read/');
                    echo $pager->links();
                ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
