<?php $session = \Config\Services::session(); ?>
<?= $this->extend('layout/admin') ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="container d-flex justify-content-center mt-5">
        <div class="row">
            <h3> Book Update</h3>
            <form enctype="multipart/form-data" method="POST" action="<?= base_url("/book/update/".$id) ?>">
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input value="<?= set_value('title', $blog['title']) ?>" class="form-control" type="text" name="title"/>
                </div>
                <div class="form-group mb-2 d-flex justify-content-around align-items-center">
                    <image src="<?= base_url('/uploads/books/'.$blog['image']) ?>" height="100px" width="100px" />
                    <div>
                        <label>Image</label>
                        <input class="form-control" type="file" name="image"/>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label>Description</label>
                    <input value="<?= set_value('description', $blog['description']) ?>" class="form-control" type="text" name="description"/>
                </div>
                <div class="form-group mb-2">
                    <label>Author</label>
                    <input value="<?= set_value('author', $blog['author']) ?>" class="form-control" type="text" name="author"/>
                </div>
                <div class="form-group mb-2">
                    <label>Availability</label>
                    <input value="<?= set_value('availability', $blog['availability']) ?>" class="form-control" type="text" name="availability"/>
                </div>
                <div class="form-group mb-2">
                    <label>Language</label>
                    <input value="<?= set_value('language', $blog['language']) ?>" class="form-control" type="text" name="language"/>
                </div>
                <div class="form-group mb-2">
                    <label>Category</label>
                    <input value="<?= set_value('category', $blog['category']) ?>" class="form-control" type="text" name="category"/>
                </div>
                <div class="form-group mb-2">
                    <label>Pages</label>
                    <input value="<?= set_value('pages', $blog['pages']) ?>" class="form-control" type="text" name="pages"/>
                </div>
                <div class="form-group mb-2">
                    <label>ISBN Number</label>
                    <input value="<?= set_value('isbn_no', $blog['isbn_no']) ?>" class="form-control" type="text" name="isbn_no"/>
                </div>
                <div class="form-group mb-2">
                    <label>Number Of Copy</label>
                    <input value="<?= set_value('no_copy', $blog['no_copy']) ?>" class="form-control" type="text" name="no_copy"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
