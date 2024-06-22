<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP SPA</title>
    <link rel="stylesheet" href="/src/style.css">
    <script src="/src/app.js"></script>
</head>

<body>
    <div id="menu">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a>
                <ul>
                    <li><a href="/about/team">Team</a></li>
                    <li><a href="/about/company">Company</a></li>
                </ul>
            </li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    <?php


    ?>
    <div id="content">
        <?php
        // URL yolunu almak ve boşsa 'home' yapmak için parse_url ve trim kullanımı
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $page = trim($path, '/');

        // İçerik dosyasını dahil etme
        include('content.php');

        ?>
    </div>
</body>

</html>