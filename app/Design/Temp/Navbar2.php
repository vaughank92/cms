<?php
if(isset($_SESSION['userName']))
{
    App::getModel('admin_user')->verifyLogin($_SESSION['userName'], $_SESSION['password']);
}?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href="http://cms.dev/assets/css/navbar.css">
    <title> Navbar </title>
</head>

<body class = "navbar">
    <div class = "navbarPage">
        <?php if(isset($_SESSION['userName'])){?>
            <ul class = "navLinks">
                <li>
                    <a class = "navbutton" href="<?php echo App::getBaseUrl()?>admin/page/allpages">All Pages</a>
                </li>
                <li>
                    <a class = "navbutton" href="<?php echo App::getBaseUrl() ?>admin/page/post">My Pages</a>
                </li>
                <li>
                    <a class = "navbutton" href="<?php echo App::getBaseUrl() ?>admin/login/post">Account</a>
                </li>
                <li>
                    <a class = "navbutton" href="<?php echo App::getBaseUrl() ?>admin/login/out">Log Out</a>
                </li>
                <li>
        </ul>
        <?php }else {?>
            <ul class = "navLinks">
                <li>
                    <a class = "navbutton" href="<?php echo App::getBaseUrl()?>admin/page/allpages">All Pages</a>
                </li>
                <li>
                    <a class = "navbutton" href = "<?php echo App::getBaseUrl()?>users/manage/adduser">Create Account</a>
                </li>
                <li>
                    <a class = "navbutton" href = "<?php echo App::getBaseUrl()?>admin/login/index">Log In</a>
                </li>
                <li>
                    <a class = "navbutton" href="<?php echo App::getBaseUrl() ?>contact/form/submit">Contact</a>
                </li>
            </ul>

        <?php } ?>

    </div>
</body>
</html>