<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/forms.css">
    <title>Change Password</title>
</head>
<body>

<div class = "container">

    <div class = "header">
        <?php include('app/Design/Temp/Header.php');?>
    </div>

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div class = "content">
        <div class = "log">
            <form method = "post" action="http://cms.dev/users/manage/changepassword">
                <div class = "name">
                    <label for = "username">Username</label>
                    <input class = "input" type="text" name="userName"/>
                </div>

                <div class = "oldpassword">
                    <label for = "oldpassword">Old Password</label>
                    <input class = "input" type="password" name="oldPassword"/>
                </div>

                <div class = "newpassword">
                    <label for = "newpassword">New Password</label>
                    <input class = "input" type="password" name="newPassword"/>
                </div>
                <input class = "submit" type="submit" value = "Submit" name = "Submit"/>
            </form>
            <!--<?php
            if($_SESSION['check'] == 1)
            {
                App::getSession()->get('changePass');
            }?>-->

        </div>
    </div>
    <div class = "footer">
        <?php include ('app/Design/Temp/Footer.php');?>
    </div>

</div>
</body>
</html>