<?php
session_start();
include_once '../Includes/header.php';
include_once '../Functions/functions.php';
include_once '../Classes/Cart.php';
$cartdel = new Classes\Cart();
$url = 'http://' . $_SERVER['HTTP_HOST'];

if (!(isset($_POST['name']) && isset($_POST['email']))):
    ?>
    <div class="display-page">
        <div class="container mt-5 rounded p-4 shadow-lg">
            <form action=<?="$url/Pages/Details.php?id={$_GET['id']} "?> method="post" enctype="multypart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                           placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <button type="submit" class="btn btn-outline-success">Purchase</button>
            </form>
        </div>
    </div>
<?php
else:
    Welcome($_POST['name'], 'Thank you for purchasing our book');
    Welcome($_POST['email'], 'We sent you the confirmation email to');
endif;
if (!isset($_SESSION['named'])) {
    $_SESSION['named'] = '';
}
@$_SESSION['name'] = $_POST['name'];
if (isset($_GET['id'])) {
    $cartdel->deleteFromCart($_GET['id']);
}


include_once '../Includes/footer.php';