<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
</head>
<body>

<div class = "container">

    <div id = "header"></div>
        <?php include('app/Design/Temp/Header.php');?>

    <div id = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <form method = "post" action="http://cms.dev/admin/edit/update">
        Title <input id ="input" type="text" name="title" value = "<?php echo $_SESSION['title'];?>"/><br>
        <textarea id = "input" name = "content" rows = '25' cols = '50'
            ><?php echo $_SESSION['content'];?></textarea> <br>
        <button id = "submit" type="submit" name = "submit" value="submit">Submit </button>
    </form>

    <form method = "post" action = "http://cms.dev/admin/login/post">
        <input type = "hidden" name = "userName" value = "<?php echo $_SESSION['userName'];?>">
        <!--check about fixing password when it is changed-->
        <input type = "hidden" name = "password" value = "<?php echo $_SESSION['password'];?>">
        <input type = "submit" value = "Back"/>
    </form>

</div>

<?php

echo $this->get('pageId');


?>

</body>
</html>