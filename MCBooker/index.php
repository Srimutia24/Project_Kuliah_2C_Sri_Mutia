<?php
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'daftarmc') {
    $page = "daftarmc.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'kategoriacara') {
    $page = "kategoriacara.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
    $page = "order.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'konfirmasipesanan') {
    $page = "konfirmasipesanan.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    $page = "user.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    $page = "report.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'orderitem') {
    $page = "order_item.php";
    include "main.php";
}  elseif (isset($_GET['x']) && $_GET['x'] == 'viewitem') {
    $page = "view_item.php";
    include "main.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/proses_logout.php";
} else {
    $page = "home.php";
    include "main.php";
}
