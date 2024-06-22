<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP SPA</title>
    <script src="src/app.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #menu {
            width: 200px;
            float: left;
        }
        #menu ul {
            list-style-type: none;
            padding: 0;
        }
        #menu li {
            margin: 10px 0;
        }
        #menu a {
            text-decoration: none;
            color: black;
        }
        #menu a.active {
            font-weight: bold;
            color: blue;
        }
        #content {
            margin-left: 220px;
        }
    </style>
    <script>
       
    </script>
</head>
<body>
    <div id="menu">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    <div id="content">
        <?php
            $page = basename($_SERVER['REQUEST_URI']) ?: 'home';
            include('content.php');
        ?>
    </div>
</body>
</html>
