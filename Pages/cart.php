<?php
session_start();
include_once '../Classes/Cart.php';
include_once '../Includes/header.php';
$cart = new Classes\Cart();
$url = 'http://' . $_SERVER['HTTP_HOST'];
if (isset($_POST['title']) && isset($_POST['price'])) {
    $cart->addToCart($_POST['title'], $_POST['price']);
}
if (isset($_GET['delete']) && isset($_GET['id'])) {
    $cart->deleteFromCart($_GET['id']);
    header('Location: cart.php');
    exit;
}
?>
<table class="table table-hover">
    <thead class="text-center">
    <tr>
        <th colspan="4" class="display-4 text-primary">Your Cart</th>
    </tr>
    </thead>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Book Title</th>
        <th scope="col">price</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cart->getCart() as $key => $book): ?>
        <tr>
            <th scope="row"><?= $key + 1 ?></th>
            <td><?= $book['title'] ?></td>
            <td><?= $book['price'] . ' ' . $_COOKIE['currency'] ?></td>
            <td>
                <a href="<?=$url. "/Pages/Details.php?id={$key}"?>" class="btn btn-outline-success card-link">Details</a>
                <a href="<?=$url. "/Pages/cart.php?id=$key" ?>&delete=true" class="btn btn-outline-danger mx-2">Delete</a>
            </td>
        </tr>
        <?php

    endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2">Total Price</td>
        <td colspan="2"><?= $cart->getTotalPrice() . ' ' . $_COOKIE['currency'] ?></td>
    </tr>
    </tfoot>
</table>
