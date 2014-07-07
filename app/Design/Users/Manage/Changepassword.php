<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method = "post" action="http://cms.dev/users/manage/changepassword">
    Username<input type="text" name="userName" /><br>
    Old Password<input type="password" name="oldPassword" /><br>
    New Password<input type="password" name="newPassword"/> <br>
    <input type="submit" name = "submit" value="submit" />
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