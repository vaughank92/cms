<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method = "post" action="http://cms.dev/admin/edit/update">
    Title<input type="text" name="title" value = "<?php echo $_SESSION['title'];?>"/><br>
    <textarea name = "content" rows = '25' cols = '50'
        ><?php echo $_SESSION['content'];?></textarea> <br>
    <button type="submit" name = "submit" value="submit">Submit </button>
</form>

<form method = "post" action = "http://cms.dev/admin/login/post">
    <input type = "hidden" name = "userName" value = "<?php echo $_SESSION['userName'];?>">
    <!--check about fixing password when it is changed-->
    <input type = "hidden" name = "password" value = "<?php echo $_SESSION['password'];?>">
    <input type = "submit" value = "Back"/>
</form>

<?php

echo $this->get('pageId');

//echo $_SESSION['title'];
//echo $_SESSION['content'];
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

//Display pages as a table

?>

</body>
</html>