<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="telegram-web-app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="container my-3">
    <div class="row">
        <div class="col-12">

            <nav class="fixed-top">
                <div class="nav nav-tabs animate__animated animate__fadeInDown" id="nav-tab" role="tablist">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-store" type="button"
                            role="tab">Store
                    </button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-cart" type="button" role="tab">
                        Cart <span class="badge rounded-pill bg-danger cart-sum">0</span></button>
                </div>
            </nav>

            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-store" role="tabpanel">
                    <h2 class="animate__animated animate__fadeInDown text-center">Food Shop</h2>
                    <div class="row animate__animated animate__fadeInUp" id="products-list">
                        <div class="col-4">
                            <div class="product-card text-center">
        <span data-id="1"
              class="product-cart-qty badge rounded-pill bg-warning"></span>
                                <img src="img/cake.png" class="card-img-top"
                                     alt="">
                                <div class="product-card-body">
                                    <p class="product-title">
                                        Cake
                                    </p>
                                    <p class="product-price">
                                        500$
                                    </p>
                                    <div class="d-grid gap-2 mt-2">
                                        <button class="btn btn-warning add2cart"
                                                data-product=''>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="product-card text-center">
        <span data-id="1"
              class="product-cart-qty badge rounded-pill bg-warning"></span>
                                <img src="img/cake.png" class="card-img-top"
                                     alt="">
                                <div class="product-card-body">
                                    <p class="product-title">
                                        Cake
                                    </p>
                                    <p class="product-price">
                                        500$
                                    </p>
                                    <div class="d-grid gap-2 mt-2">
                                        <button class="btn btn-warning add2cart"
                                                data-product=''>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="product-card text-center">
        <span data-id="1"
              class="product-cart-qty badge rounded-pill bg-warning"></span>
                                <img src="img/cake.png" class="card-img-top"
                                     alt="">
                                <div class="product-card-body">
                                    <p class="product-title">
                                        Cake
                                    </p>
                                    <p class="product-price">
                                        500$
                                    </p>
                                    <div class="d-grid gap-2 mt-2">
                                        <button class="btn btn-warning add2cart"
                                                data-product=''>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="product-card text-center">
        <span data-id="1"
              class="product-cart-qty badge rounded-pill bg-warning"></span>
                                <img src="img/cake.png" class="card-img-top"
                                     alt="">
                                <div class="product-card-body">
                                    <p class="product-title">
                                        Cake
                                    </p>
                                    <p class="product-price">
                                        500$
                                    </p>
                                    <div class="d-grid gap-2 mt-2">
                                        <button class="btn btn-warning add2cart"
                                                data-product=''>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="product-card text-center">
        <span data-id="1"
              class="product-cart-qty badge rounded-pill bg-warning"></span>
                                <img src="img/cake.png" class="card-img-top"
                                     alt="">
                                <div class="product-card-body">
                                    <p class="product-title">
                                        Cake
                                    </p>
                                    <p class="product-price">
                                        500$
                                    </p>
                                    <div class="d-grid gap-2 mt-2">
                                        <button class="btn btn-warning add2cart"
                                                data-product=''>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="product-card text-center">
        <span data-id="1"
              class="product-cart-qty badge rounded-pill bg-warning"></span>
                                <img src="img/cake.png" class="card-img-top"
                                     alt="">
                                <div class="product-card-body">
                                    <p class="product-title">
                                        Cake
                                    </p>
                                    <p class="product-price">
                                        500$
                                    </p>
                                    <div class="d-grid gap-2 mt-2">
                                        <button class="btn btn-warning add2cart"
                                                data-product=''>ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center animate__animated animate__fadeInUp" id="loader">
                        <button class="btn btn-warning" id="loader-btn">Load more</button>
                        <img src="img/loader.svg" alt="" id="loader-img" class="loader-img">
                    </div>

                </div>

                <div class="tab-pane fade show" id="nav-cart" role="tabpanel">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="animate__animated animate__fadeInDown text-center">Cart</h2>

                            <p class="empty-cart">Cart is empty...</p>

                            <table class="table animate__animated animate__fadeInUp">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">🗑</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-middle">
                                    <th scope="row">1</th>
                                    <td><img src="img/burger.png" class="cart-img" alt=""></td>
                                    <td>Burger</td>
                                    <td>1</td>
                                    <td>799$</td>
                                    <td>
                                        <button class="btn btn-outline-danger del-item">🗑</button>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">2</th>
                                    <td><img src="img/cake.png" class="cart-img" alt=""></td>
                                    <td>Cake</td>
                                    <td>2</td>
                                    <td>1000$</td>
                                    <td>
                                        <button class="btn btn-outline-danger del-item">🗑</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
