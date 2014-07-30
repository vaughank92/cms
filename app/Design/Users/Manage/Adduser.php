<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/forms.css">

  <!--  <link rel = "stylesheet" href = "<?php /*echo App::getBaseUrl()*/?>assets/bootstrap/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src = <?php /*echo App::getBaseUrl()*/?>assets/bootstrap/js/bootstrap.min.js"></script>-->
</head>
<body>

<div class = "container">
<!--
    <div class = "header">
        <?php /*include ('app/Design/Temp/Header.php');*/?>
    </div>-->

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/forms.css">

    <div class = "content">
        <div class = "log">
            <form class = "form-group" method = "post" action='http://cms.dev/users/manage/adduser'>
                <div class = "name">
                    <label for = "username">Username</label>
                    <input class = "input form-control" type="text" name="userName"/>
                </div>

                <div class = "email">
                    <label for = "email">E-mail</label>
                    <input class = "input form-control" type="text" name="email"/>
                </div>

                <div class = "password">
                    <label for = "password">Password</label>
                    <input class = "input form-control" type="password" name="password"/>
                </div>

                <input class = "submit button btn btn-default" type="submit" name = "submit" value="Create Account">
            </form>

            <?php $reasons = array("username" => "Invalid Username", "blank" => "Empty Fields");
            if(isset($_GET['submitFailed']) && $_GET['submitFailed'])
            {
                echo $reasons[$_GET['reason']];
            }?>
        </div>

    </div>

    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>

</body>
</html>