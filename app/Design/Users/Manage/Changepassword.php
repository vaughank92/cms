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

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/forms.css">

    <div class = "content">
        <div class = "log">
            <form class = "form-group" method = "post" action="http://cms.dev/users/manage/changepassword">
                <div class = "name">
                    <label for = "username">Username</label>
                    <input class = "input form-control" type="text" name="userName"/>
                </div>

                <div class = "oldpassword">
                    <label for = "oldpassword">Old Password</label>
                    <input class = "input form-control" type="password" name="oldPassword"/>
                </div>

                <div class = "newpassword">
                    <label for = "newpassword">New Password</label>
                    <input class = "input form-control" type="password" name="newPassword"/>
                </div>
                <input class = "submit btn btn-default" type="submit" value = "Submit" name = "Submit"/>
            </form>

        </div>
    </div>
    <div class = "footer">
        <?php include ('app/Design/Temp/Footer.php');?>
    </div>

</div>
</body>
</html>