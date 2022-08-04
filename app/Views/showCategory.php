<?php $this->extend('layout/base') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="container py-5">
        <h3 class="text-center text-white py-3" style="background-color: #01579b">Showing Result for: <?= $category ?></h3>
        <div class="col-12 py-3 px-3 mt-3" style="background-color: #e1f5fe">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                    <?php foreach($books as $b): ?>
                    <div class="col">
                      <div class="card" style="background-color:#01579b">
                          <img height="300" width="180" src="<?= base_url('/uploads/books/'.$b['image']) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-white" href="<?= base_url('/single/'.$b['id']) ?>"><?= $b['title'] ?></a></h5>
                          <p style="color:#0288d1"><?= $b['author'] ?></p>
                          <div class="d-flex justify-content-around">
                              <div class="flex-row">
                                  <p class="text-white">Languages</p>
                                  <p class="text-white"><?= $b['language'] ?></p>
                              </div>
                              <div class="flex-row">
                                  <p class="text-white">Pages</p>
                                  <p class="text-white">Total Pages: <?= $b['pages'] ?></p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
            </div>
    </div>
</div>


<?= $this->endSection() ?>