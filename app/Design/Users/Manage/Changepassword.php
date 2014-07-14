<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <title>Document</title>
</head>
<body>

<div class = "container">

    <div id = "header">
        <?php include('app/Design/Temp/Header.php');?>
    </div>

    <div id = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div id = "content">
        <form method = "post" action="http://cms.dev/users/manage/changepassword">
            Username<input id = "input" type="text" name="userName" /><br>
            Old Password<input id = "input" type="password" name="oldPassword" /><br>
            New Password<input id = "input" type="password" name="newPassword"/> <br>
            <input id = "submit" type="submit" value = "Submit" name = "Submit"/>
        </form>

        <form id = "hidden" method = "post" action = "http://cms.dev/admin/login/post">
            <input type = "hidden" name = "userName" value = "<?php echo $_SESSION['userName'];?>">
            <!--check about fixing password when it is changed-->
            <input type = "hidden" name = "password" value = "<?php echo $_SESSION['password'];?>">
            <input id = "submit" type = "submit" value = "Back"/>
        </form>

    </div>

    <div id = "footer"></div>

</div>
<?php
/*echo $this->get('name');
echo $this->get('email');
echo $this->get('comment');*/
echo $_SESSION['password'];
/*echo $_POST['name'].' ';
echo $_POST['email'].' ';
echo $_POST['comment'];*/

?>

</body>
</html>