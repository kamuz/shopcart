<?php
error_reporting(-1);
session_start();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/func.php';
$products = get_products();
// debug($products);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Guitars</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Guitar equipment</a></li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">Basket <span class="badge badge-light">3</span></button>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php debug($_SESSION); //session_destroy(); ?>
    <div class="wrapper mt-5">
        <div class="container">
            <div class="row">
                <?php if(!empty($products)): ?>
                    <?php foreach($products as $product): ?>
                        <div class="product-cards mb-5">
                            <div class="product-card">
                                <div class="offer">
                                    <?php echo $product['hit'] ? '<div class="offer-hit">Hit</div>' : '';?>
                                    <?php echo $product['sale'] ? '<div class="offer-sale">Sale</div>' : '';?>
                                </div>
                                <div class="card-thumb">
                                    <a href="#"><img src="assets/img/<?php echo $product['img'];?>" alt=""></a>
                                </div>
                                <div class="card-caption">
                                    <div class="card-title">
                                        <a href="#"><?php echo $product['title']; ?></a>
                                    </div>
                                    <div class="card-price text-center"><?php echo ($product['old_price'] != 0) ? "<del>{$product['old_price']} UAN</del>" : '';?> <?php echo $product['price']; ?> UAN</div>
                                    <a href="?cart=add&id=<?php echo $product['id']; ?>" type="button" class="btn btn-info btn-block card-addtocart" data-id="<?php echo $product['id']; ?>"><i class="fas fa-cart-arrow-down"></i> Add to cart</a>
                                    <div class="item-status"><i class="fas fa-check text-success"></i> In stock</div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Basket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#"><img src="assets/img/1.jpg" alt="CORT AD810M Acoustic guitar"></a>
                                </td>
                                <td><a href="#">CORT AD810M Acoustic guitar</a></td>
                                <td>2 799</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="assets/img/2.jpg" alt="Crafter D6/N Acoustic guitar"></a>
                                </td>
                                <td><a href="#">Crafter D6/N Acoustic guitar</a></td>
                                <td>12 626</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right">Products: 3 <br> Total: 28 051 UAH</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Checkout order</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>