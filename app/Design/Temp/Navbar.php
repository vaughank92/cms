<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href="http://cms.dev/assets/css/navbar.css">
    <title> Navbar </title>
</head>

<body id = "navbar">
    <div id = "navbarPage">
        <ul>
            <li>
                <a href="<?php echo App::getBaseUrl() ?>admin/login/out">Log Out</a>
            </li>
            <li>
                <a href="<?php echo App::getBaseUrl() ?>admin/login/post">Login</a>
            </li>
            <li>
                <a href="<?php echo App::getBaseUrl() ?>admin/pagelist/post">My Pages</a>
            </li>
            <li>
        </ul>
    </div>
</body>
</html>