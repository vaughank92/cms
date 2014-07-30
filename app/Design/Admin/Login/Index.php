<?php $store = App::getSession()->get('logFail');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<!--    <link rel = "stylesheet" href = "<?php /*echo App::getBaseUrl()*/?>assets/bootstrap/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src = <?php /*echo App::getBaseUrl()*/?>assets/bootstrap/js/bootstrap.min.js"></script>-->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>assets/css/forms.css">

   <title>Log In</title>
</head>
<body>

<?php //include('app/assets');

?>

<div class = "container">
    <div class = navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>assets/css/forms.css">
<!--
    <div class = "header">
        <?php /*include('app/Design/Temp/Header.php');*/?>
    </div>-->
    <div class = "content">
        <div class = "log ">
            <form  class = "form-group" method = "post" action="<?php echo App::getBaseUrl()?>admin/login/post">
                <div class = "name">
                    <label for = "userName">UserName</label>
                     <input class = "input form-control" type="text" name="userName"/>
                </div>

                <div class = "password">
                    <label for = "password">Password</label>
                    <input class = "input form-control" type="password" name="password" /><br>

                <div>
                    <input type="submit" class = "btn button btn-default" name = "LogIn" value="Log In"/>
                </div>
            </form>

            <?php $reasons = array("blank"=>"Blank Fields", "info"=>"Incorrect Username or Password");
            if(isset($_GET['loginFailed'])&&$_GET['loginFailed'])
            {
                echo $reasons[$_GET['reason']];
            }?>

        </div>

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