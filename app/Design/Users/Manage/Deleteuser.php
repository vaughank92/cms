<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/forms.css">
    <title>Delete User</title>
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
            <form method = "post" action="http://cms.dev/users/manage/deleteuser">
                <div class = "name">
                    <label for = "username">Username</label>
                    <input class = "input" type="text" name="userName"/>
                </div>

                <div class = "password">
                    <label for = "password">Password</label>
                    <input class = "input" type="password" name="password"/>
                </div>
                <input class = "submit" type="submit" name = "submit" value="Submit" />
            </form>
            <?php $reasons = array("info" => "Incorrect Username or Password", "blank" => "Empty Fields");
            if(isset($_GET['deleteFailed']) && $_GET['deleteFailed'])
            {
                echo $reasons[$_GET['reason']];
            }?>
        </div>
    </div>

    <div class = "footer">
        <?php include ('app/Design/Temp/Footer.php');?>
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