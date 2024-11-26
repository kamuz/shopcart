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