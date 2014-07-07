<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method = "post" action="http://cms.dev/users/manage/deleteuser">
    Username<input type="text" name="userName" /><br>
    Password<input type="password" name="password" /><br>
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