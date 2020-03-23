<?php global $conn; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/static/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/static/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <title><?= $data['title'] ?></title>
    <style>
        #__bs_notify__ {
            /* Move notification to bottom */
            top: auto !important;
            bottom: 0 !important;
            border-top-left-radius: 0.31rem !important;
            border-bottom-left-radius: 0 !important;
            font-size: 0.8rem !important; 
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <?php require_once '../templates/cart_modal.php' ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
            <!--Container start-->
            <div class="container-lg">
                <button class="navbar-toggler order-0 zborder-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand order-1 text-muted" href="#">
                    <img src="/favicon.ico" alt=""> Logo
                </a>
                <!--Collapsible Menu start-->
                <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
                    <form class="form-inline flex-column order-lg-1 ml-auto my-2 my-lg-0">
                        <input class="form-control text-center mr-sm-2" type="search" placeholder="Find a product..." aria-label="Search">
                    </form>
                    <ul class="navbar-nav order-lg-0 ml-auto align-items-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Phones</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Laptops</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">TVs'</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Collapsible Menu end-->
                <section class="order-1 order-lg-3">
                    <i onclick="loadCart()" class="navbar-icon fas fa-shopping-cart ml-1 text-secondary" data-toggle="modal" data-target="#cartModal"></i>
                </section>
            </div>
            <!--Container end-->
        </nav>
        <section class="mt-2 mb-4">
            <div class="container-lg">
                <div class="d-flex justify-content-end align-items-center">
                    <span class="lead text-right text-muted">
                        <i class="fas fa-phone-alt"></i>
                        Call us:
                        <br>
                        0574033020
                    </span>
                </div>
            </div>
        </section>
    </header>
    <?php if (!empty($data['hero_images'])) : ?>
        <?= $data['hero_images'] ?>
    <?php endif ?>
    <?= $data['main_content'] ?>
    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <img src="/favicon.ico" alt="">
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li>
                        <a class="text-muted" href="#">Blog</a>
                    <li>
                    <li>
                        <a class="text-muted" href="#">Dark mode</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Shopping cart</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">User account</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Full text search</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">SEO</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Rating</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Services</h5>
                <ul class="list-unstyled text-small">
                    <li>
                        <a class="text-muted" href="#">Repairs</a>
                    <li>
                        <a class="text-muted" href="#">Maintenance</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Retail</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Wholesale</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Discounts</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Clearance</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Careers</h5>
                <ul class="list-unstyled text-small">
                    <li>
                        <a class="text-muted" href="#">Hiring</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Contracts</a>
                    </li>
                    <li>
                        <a class="text-muted" href="#">Internships</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="/static/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/static/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/static/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/static/js/script.js"></script>
</body>

</html>