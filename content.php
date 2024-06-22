<?php
$page = isset($_GET['page']) ? $_GET['page'] : parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Başı ve sonundaki / işaretlerini temizleyin
$page = trim($page, '/');

$pagePath = 'pages/' . $page . '.php';

if (file_exists($pagePath)) {
    include($pagePath);
} else {
    include('pages/404.php'); // Hata sayfası
}