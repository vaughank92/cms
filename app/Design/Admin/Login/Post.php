<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <title>Account Page</title>
</head>
<body>

<!--<h1> Successfully Logged In <?php echo App::getSession()->get('userName');?></h1>-->

<div class = "container">

    <div class = "header">
        <?php include ('app/Design/Temp/Header.php');?>
    </div>

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div class = "content">

        <ul class = "manage">
            <li>
                <a class = "button" href = "<?php echo App::getBaseUrl()?>admin/page/addpage">Add New Page</a>
            </li>
            <br>
            <li>
                <a class = "button" href = "<?php echo App::getBaseUrl()?>users/manage/changepassword">Change Password</a>
            </li>
            <br>
            <li>
                <a class = "button" href = "<?php echo App::getBaseUrl()?>users/manage/deleteuser">Delete User</a>
            </li>
        </ul>

<!--        <form action = "<?php /*echo App::getBaseUrl()*/?>admin/page/addpage">
            <input class = "input" type = "submit" value = "Add New Page">
        </form>

        <form action = "<?php /*echo App::getBaseUrl()*/?>users/manage/changepassword">
            <input class = "input" type = "submit" value = "Change Password"></form>

        <form action = "<?php /*echo App::getBaseUrl()*/?>users/manage/deleteuser">
            <input class = "input" type = "submit" value = "Delete User">
        </form>-->
    </div>

    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>

</div>
</body>
</html>