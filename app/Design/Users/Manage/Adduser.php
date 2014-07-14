<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
</head>
<body>

<div class = "container">

    <div id = "header">
        <?php include ('app/Design/Temp/Header.php');?>
    </div>

    <div id = "navbar"></div>

    <div id = "content">
        <form method = "post" action="http://cms.dev/users/manage/adduser">
            Username <input id = "input" type="text" name="userName" /><br>
            E-mail <input id = "input" type="text" name="email" /><br>
            Password <input id = "input" type="password" name="password"/> <br>
            <input id = "submit" type="submit" name = "submit" value="Create Account">
            <!--<a href = "http://cms.dev/admin/login/index"></a>-->
        </form>
    </div>

    <div id = "footer"></div>
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