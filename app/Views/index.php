<?php $this->extend('layout/base') ?>
<?= $this->section('content') ?>

<div class="container-fluid" style="height:85vh;width:98vw;background: url('<?= base_url('library.jpg') ?>')">
    <div class="container d-flex flex-column justify-content-center align-items-center" style="background: rgba(0,0,0,0.5);height:85vh">
        <h1 class='text-center' style="color:white;font-family: 'Poppins', sans-serif;">Lal Bhadur Shastri Institute of<br/> Management & Development<br/> Studies</h1>
        <h1 style="color:white;padding-top: 5%;font-family: 'Montserrat', sans-serif;">Campus Library</h1>
    </div>
</div>
<div class="container-fluid my-4">
        <div class="row px-3">
            <h3 class="text-center py-4 text-white" style="background-color: #01579b">All Latest Books</h3>
            <div class="col-9 px-5 py-4">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                    <?php foreach($books as $b): ?>
                    <div class="col">
                      <div class="card" style="background-color: #01579b">
                          <img height="300" width="180" src="<?= base_url('/uploads/books/'.$b['image']) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-white" href="<?= base_url('/single/'.$b['id']) ?>"><?= $b['title'] ?></a></h5>
                          <p style="color:#0288d1"><?= $b['author'] ?></p>
                          <div class="d-flex justify-content-around">
                              <div class="flex-row">
                                  <p class="text-white"><strong>Languages:</strong><br/><?= $b['language'] ?></p>
                              </div>
                              <div class="flex-row">
                                  <p class="text-white"><strong>Pages:</strong><br/><?= $b['pages'] ?></p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <div class="row">
                    <?php
                        $pager->setPath('/');
                        echo $pager->links();
                    ?>
                </div>
            </div>
            <div class="col-3 py-5 px-4">
                
                <div class="row py-3 px-3" style="background-color: #e1f5fe" align="center">
                    <h3 class="py-3 px-3 text-center text-white" style="background-color: #01579b">Search</h3>
                    <form action="<?= base_url('/search') ?>" method="post">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="search" /> 
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Search</button>
                    </form>
                </div>
                <div class="row py-3 px-3 mt-4 mb-4" style="background-color: #e1f5fe" align="center">
                    <h3 class="py-3 px-3 text-center text-white" style="background-color: #01579b">Categories</h3> 
                    <nav class="nav flex-column">
                        <?php foreach($categories as $category): ?>
                        <a style="color:black" href="<?= base_url('/showcategory/'.$category['title']) ?>" class="nav-link"><?= $category['title'] ?></a>
                        <?php endforeach; ?>
                     </nav>                       
                </div>
                
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
