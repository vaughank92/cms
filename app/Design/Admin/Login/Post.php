<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <title>Document</title>
</head>
<body>

<!--<h1> Successfully Logged In <?php echo App::getSession()->get('userName');?></h1>-->

<div class = "container">

    <div id = "header">
        <?php include ('app/Design/Temp/Header.php');?>
    </div>

    <div id = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>


    <div id = "content">
        <!--<form action = "http://cms.dev/admin/pagelist/post">
            <input type = "submit" value = "User Pages Button">
            <!--<a href = "http://cms.dev/admin/pagelist/post">
        </form>-->

        <form action = "http://cms.dev/admin/pagelist/addpage">
            <input type = "submit" value = "Add New Page">
            <!--<a href = "http://cms.dev/admin/pagelist/addpage">-->
        </form>

        <form action = "http://cms.dev/users/manage/changepassword">
            <input type = "submit" value = "Change Password"></form>

        <!--<form action = "http://cms.dev/admin/login/out">
            <input type = "submit" value = "Log Out">
        </form>-->

        <form action = "http://cms.dev/users/manage/deleteuser">
            <input type = "submit" value = "Delete User">
        </form>
    </div>


<?php
//Is either logged in or not...
//echo $_POST['userId'];

//echo $this->get('userName');
//echo $this->get('password');
?>

</body>
</html>