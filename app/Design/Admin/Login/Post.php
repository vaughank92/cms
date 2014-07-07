<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1> Successfully Logged In <?php echo App::getSession()->get('userName');?></h1>

<form action = "http://cms.dev/admin/pagelist/post">
    <input type = "submit" value = "User Pages Button">
    <!--<a href = "http://cms.dev/admin/pagelist/post">-->
</form>

<form action = "http://cms.dev/admin/pagelist/addpage">
    <input type = "submit" value = "Add New Page">
    <!--<a href = "http://cms.dev/admin/pagelist/addpage">-->
</form>

<form action = "http://cms.dev/users/manage/changepassword">
    <input type = "submit" value = "Change Password">
</form>


<?php
//Is either logged in or not...

//echo $_POST['userId'];

//echo $this->get('userName');
//echo $this->get('password');
?>

</body>
</html>