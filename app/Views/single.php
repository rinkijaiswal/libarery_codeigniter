<?php $session = \Config\Services::session() ?>
<?php $this-> extend('layout/base')?>
<?php $this->section('content'); ?>

<div class="container-fluid">
    <?php if($session->getTempdata('error')): ?>
        <div class="container px-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $session->getTempdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row py-5" style="background-color: #eeeeee">
            <div class="col-3 offset-2">
                <img height="350" src="<?= base_url('/uploads/books/'.$book['image']) ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-7">
                <h3 class="mt-2"><?= $book['title'] ?></h3>
                <p><?= $book['author'] ?></p>
                <p><strong>Language:</strong> <?= $book['language'] ?></p>
                <p><strong>Pages:</strong> <?= $book['pages'] ?></p>
                <p><strong>Isbn No:</strong> <?= $book['isbn_no'] ?> </p>
                <p><strong>Available:</strong> <?= $book['availability'] ?></p>
                <p><strong>Description:</strong></p>
                <p><?= $book['description'] ?></p>
                <form action="<?=  base_url('/cart/create') ?>" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="name" value="<?= $book['title'] ?>" />
                    <input type="hidden" name="book_id" value="<?= $book['id'] ?>" />
                    <input type="hidden" name="isbn_no" value="<?= $book['isbn_no'] ?>" />
                    <input type="hidden" name="image" value="<?= $book['image'] ?>" />
                   <button class="btn btn-primary">Add To Cart</button> 
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>