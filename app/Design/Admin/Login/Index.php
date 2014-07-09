<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method = "post" action="http://cms.dev/admin/login/post">
    UserName<input type="text" name="userName" /><br>
    Password<input type="password" name="password" /><br>
    <input type="submit" name = "LogIn" value="Log In" />
</form>

<form method = "post" action = "http://cms.dev/users/manage/adduser">
    <input type = "submit" name = "create" value = "Create Account"/>

</form>

<?php

//echo $this->get('userName');
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

?>

</body>
</html>