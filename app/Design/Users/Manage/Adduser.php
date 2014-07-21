<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/forms.css">
</head>
<body>

<div class = "container">

    <div class = "header">
        <?php include ('app/Design/Temp/Header.php');?>
    </div>

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div class = "content">
        <div class = "log">
            <form method = "post" action='http://cms.dev/users/manage/adduser'>
                <div class = "name">
                    <label for = "username">Username</label>
                    <input class = "input" type="text" name="userName"/>
                </div>

                <div class = "email">
                    <label for = "email">E-mail</label>
                    <input class = "input" type="text" name="email"/>
                </div>

                <div class = "password">
                    <label for = "password">Password</label>
                    <input class = "input" type="password" name="password"/>
                </div>

                <input class = "submit" type="submit" name = "submit" value="Create Account">
            </form>
        </div>
    </div>

    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>


<?php

/*echo $this->get('name');
echo $this->get('email');
echo $this->get('comment');*/

/*echo $_POST['name'].' ';
echo $_POST['email'].' ';
echo $_POST['comment'];*/

?>

</body>
</html>