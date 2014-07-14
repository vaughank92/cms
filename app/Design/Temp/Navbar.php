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
        <h2><?php echo $_SESSION['userName'];?></h2>

        <form id = "buttons" action = "http://cms.dev/admin/login/out">
            <input id = "nav" type = "submit" value = "Log Out"></form>

        <form id = "buttons" name = "page" method = "post" action = "http://cms.dev/admin/login/post">
                <input type = "hidden" name = "userName" value = "<?php echo $_SESSION['userName'];?>">
                <!--check about fixing password when it is changed-->
                <input type = "hidden" name = "password" value = "<?php echo $_SESSION['password'];?>">
                <input id = "nav" type = "submit" value = "Account"/></form>

        <form id = "buttons" method = "post" action = "http://cms.dev/admin/pagelist/post">
                <input id = "nav" type = "submit" value = "My Pages"></form>

    </ul>
</div>

</body>
</html>