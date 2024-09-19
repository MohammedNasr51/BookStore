<?php
session_start();
include_once 'Includes/header.php';
include_once 'Functions/functions.php';

welcome($_SESSION['name']??'Guest');
include_once 'Includes/footer.php';