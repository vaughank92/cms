<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href="http://cms.dev/assets/css/forms.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <title>Document</title>


</head>
<body>

<?php //include('app/assets');

?>

<div class = "container">

    <div id = "header">
        <?php include('app/Design/Temp/Header.php');?>
    </div>

    <div id = "navbar">
        <?php //include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div id = "content">

        <form id = "login" method = "post" action="http://cms.dev/admin/login/post">
            UserName <input id = "input" type="text" name="userName" /><br>

            Password <input id = "input" type="password" name="password" /><br>
            <input id = "submit" type="submit" name = "LogIn" value="Log In" />
        </form>

        <form id = "createAccount" method = "post" action = "http://cms.dev/users/manage/adduser">
            <input id = "submit" type = "submit" name = "create" value = "Create Account"/>

        </form>

    </div>

    <div id = "footer"></div>

</div>



<?php

//echo $this->get('userName');
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

?>

</body>
</html>