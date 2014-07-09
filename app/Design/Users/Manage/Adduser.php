<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method = "post" action="http://cms.dev/users/manage/adduser">
    Username<input type="text" name="userName" /><br>
    E-mail<input type="text" name="email" /><br>
    password <input type="password" name="password"/> <br>
    <input type="submit" name = "submit" value="submit">
    <!--<a href = "http://cms.dev/admin/login/index"></a>-->
</form>
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