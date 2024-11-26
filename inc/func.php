<?php

/**
 * Debug function
 */
function debug($var):void
{
    echo '<pre>' . print_r($var, 1) . '</pre>';
}

/**
 * Get products
 */
function get_products():array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM products");
    return $res->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Get product
 */
function get_product(int $id):array
{
    global $pdo;
    $smtp = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $smtp->execute([$id]);
    return $smtp->fetch();
}

/**
 * Add to cart
 */
function add_to_cart($product):void
{
    if(isset($_SESSION['cart'][$product['id']])) {
        // If product exist in the cart - increment QTY
        $_SESSION['cart'][$product['id']]['qty'] += 1;
    } else {
        // If new product - add data to cart
        $_SESSION['cart'][$product['id']] = [
            'title' => $product['title'],
            'slug' => $product['slug'],
            'price' => $product['price'],
            'qty' => 1,
            'img' => $product['img'],
        ];
    }
    // Increment QTY
    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    // Increase SUM
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];
}