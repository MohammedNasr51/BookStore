<?php include_once '../Includes/header.php';
include_once '../Functions/functions.php';


if (isset($_POST['currency'])) {
    setcookie('currency', $_POST['currency'], time() + 86400 * 30);
}
$currency = $_COOKIE['currency'] ?? 'USD';
?>



    <div class="container mt-4">
        <h2 class="text-success">Set Your Currency Preference</h2>
        <form method="post">
            <select name="currency" id="currency" class="custom-select">
                <option value="USD" <?php if ($currency == 'USD')
                    echo 'selected'; ?>>USD</option>
                <option value="EUR" <?php if ($currency == 'EUR')
                    echo 'selected'; ?>>EUR</option>
                <option value="EGP" <?php if ($currency == 'EGP')
                    echo 'selected'; ?>>EGP</option>
            </select>
            <button type="submit" class="btn btn-outline-success mt-4">Save Preference</button>
        </form>
    </div>

<?php Welcome($currency,'Your Preferred Currency is ','success',45) ;
include '../Includes/footer.php';