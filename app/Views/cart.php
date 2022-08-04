<?php $session = \Config\Services::session() ?>
<?php $this->extend('layout/base') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <?php if ($session->getTempdata('success')): ?>
        <div class="container px-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $session->getTempdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>
    <div class="container mt-3 py-5 px-5" style="background-color:#fafafa ">
        <h3 class="text-center">Cart</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carts as $c): ?>
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td>
                            <img src="<?= base_url('/uploads/books/' . $c['image']) ?>" height="150px" width="100px"/>
                        </td>
                        <td><?= $c['name'] ?></td>
                        <td><a href="<?= base_url('/cart/delete/' . $c['id']) ?>" class="btn btn-danger">X</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class=" d-flex justify-content-between">
            <p></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Issue
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Issue Books</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('/issue/create') ?>" method="post">
                                <div class="form-group mb-2">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="student_name" required/>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Class</label>
                                    <input type="text" class="form-control" name="class" required/>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Semester</label>
                                    <input type="text" class="form-control" name="semester" required/>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>