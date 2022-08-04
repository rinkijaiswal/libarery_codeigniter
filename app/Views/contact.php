
<?php $this-> extend('layout/base')?>
<?php $this->section('content'); ?>
<div class="container my-3">
    <div class="row py-5 px-5" style="background: #fafafa">
        <div class="container d-flex justify-content-center mt-5">
    <div class="row">
        <h3> Contact Us </h3>
        <form method="POST" action="<?= base_url('/contact')?>">
            <div class="form-group mb-2">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required/>
            </div>
            <div class="form-group mb-2">
                <label>Email</label>
                <input type="text" class="form-control" name="email" required/>
            </div>
            <div class="form-group mb-2">
                <label>Roll Number</label>
                <input type="text" class="form-control" name="roll_no" required/>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="query"></textarea>
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-success mt-2">Contact</button>
            </div>
        </form>
    </div>
</div>
</div>
    </div>
</div>
<?php $this->endSection(); ?>