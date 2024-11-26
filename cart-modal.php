<div class="modal-body">
<?php if(!empty($_SESSION['cart'])): ?>
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
            <?php foreach ($_SESSION['cart'] as $product): ?>
                <tr>
                    <td><a href="#"><img src="assets/img/<?php echo $product['img'] ?> " alt="CORT AD810M Acoustic guitar"></a>
                    </td>
                    <td><a href="#"><?php echo $product['title'] ?></a></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['qty'] ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" align="right">Products: <span id="modal-cart-qty"><?php echo $_SESSION['cart.qty'] ?></span> <br> Total: <?php echo $_SESSION['cart.sum'] ?> UAH</td>
            </tr>
        </tbody>
    </table>
    <?php else: ?>
        Cart is empty
    <?php endif; ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <?php if(!empty($_SESSION['cart'])): ?>
        <button type="button" class="btn btn-primary">Checkout order</button>
        <button type="button" class="btn btn-danger" id="clear-cart">Clear cart</button>
    <?php endif; ?>
</div>