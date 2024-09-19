<?php
$url = 'http://'.$_SERVER['HTTP_HOST'];
define('URL',$url);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.1.1-1/css/bootstrap.min.css"
        integrity="sha512-iqRdf+0KMFmNZgdsA+8bz1MWIIXQBUCavPYVSVI83fcVfH2Y2PnNooLN04bgTNoUiQvIzidiIHJAcIP/uAEV9w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/images/book-logo.svg">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Book shop</title>
</head>

<body>
    <header class="mb-2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">
                <div class="logo"><img src="../assets/images/book-logo.svg" alt=""></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ">
                        <a class="nav-link" href="<?=URL.'/index.php'?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=URL.'/Pages/bookList.php'?>">Book List </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=URL.'/Pages/preferences.php'?>">Preferences</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0 mx-4" action="<?=URL.'/Pages/cart.php'?>" method="post">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Go to Cart <i
                            class="fa-solid fa-cart-plus"></i></button>
                </form>
                <form class="form-inline my-2 my-lg-0 " action="<?=URL.'/Pages/logout.php'?>" method="post">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout <i
                            class="fa-solid fa-right-from-bracket"></i></button>
                </form>

            </div>
        </nav>
    </header>