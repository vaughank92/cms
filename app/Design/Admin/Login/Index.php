<?php $store = App::getSession()->get('logFail');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>assets/css/forms.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <title>Log In</title>
</head>
<body>

<?php //include('app/assets');

?>

<div class = "container">

    <div class = "header">
        <?php include('app/Design/Temp/Header.php');?>
    </div>

    <div class = navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>
    <div class = "content">
        <div class = "log">
            <form  method = "post" action="<?php echo App::getBaseUrl()?>admin/login/post">
                <div class = "name">
                    <label for = "userName">UserName</label>
                     <input class = "input" type="text" name="userName"/>
                </div>

                <div class = "password">
                    <label for = "password">Password</label>
                    <input class = "input" type="password" name="password" /><br>
                </div>

                <input class = "submit" type="submit" name = "LogIn" value="Log In" />
            </form>

            <?php $reasons = array("blank"=>"Blank Fields", "info"=>"Incorrect Username or Password");
            if(isset($_GET['loginFailed'])&&$_GET['loginFailed'])
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

//echo $this->get('userName');
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

?>

</body>
</html>