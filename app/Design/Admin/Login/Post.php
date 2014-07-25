<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" title = "blue" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <link rel = "alternate stylesheet" type = "text/css" title = "green" href = "<?php echo App::getBaseUrl()?>assets/css/green.css">
    <script type = "text/javascript" src = "<?php echo App::getBaseUrl()?>assets/js/switch.js"></script>

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

    <form method = "post" action = "<?php echo App::getBaseUrl()?>admin/page/changetheme">
        <input type = "radio" onclick = "switch_style('blue')" name = "theme" value = "main" id = "blue">Blue<br>
        <input type = "radio" onclick = "switch_style('green')" name = "theme" value = "green" id = "green">Green
        <input type = "submit" name = "submit" value = "Submit">
   </form>

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