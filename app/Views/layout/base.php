<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Library</title>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #01579b">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3">
                <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
                    <span class="fs-4 text-white">LBSIMDS</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/" class="nav-link text-white"><i class="fa-solid fa-house"></i></a></li>
                    <?php

                    use App\Models\CartModel;

                    $model = new CartModel();
                    $result = $model->getCount();
                    ?>

                    <li class="nav-item"><a href="<?= base_url("/cart/create") ?>" class="nav-link text-white"><?= $result ?>&nbsp;<i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li class="nav-item"><a style="color:" href="<?= base_url("/contact") ?>" class="nav-link text-white">Contact</a></li>
                </ul>
            </header>
        </div>
        </div>
<?= $this->renderSection('content') ?>

        <!-- footer-->
        <div class="container-fluid" style="background-color: #01579b">
        <div class="container border-top py-4">
            <footer>
                <div class="row pb-4 border-bottom d-flex justify-content-center align-items-center">
                    <div class="col-2">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-white">Home</a></li>
                            <li class="nav-item mb-2"><a href="<?= base_url("/cart/create") ?>" class="nav-link p-0 text-white">Cart</a></li>
                            <li class="nav-item mb-2"><a href="<?= base_url("/contact") ?>" class="nav-link p-0 text-white">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Sitemap</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1">
                        <form action="<?= base_url('/search') ?>" method="post">
                            <h5>Search Books</h5>
                            <p class="text-white">Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-100 gap-2">
                                <input name="search" type="text" class="form-control" placeholder="Search">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center pt-2">
                    <p class="text-white">&copy; 2021 Company, Inc. All rights reserved.</p>
                </div>
            </footer>
        </div>
        </div>
        <!-- footer-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    </body>
</html>