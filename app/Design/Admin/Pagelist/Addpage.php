<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/page.css">
</head>
<body>

<div class = "container">
    <div id = "header">
        <?php include("app/Design/Temp/Header.php");?>
    </div>
    <div id = "navbar">
        <?php include("app/Design/Temp/Navbar.php");?>
    </div>
    <div id = "content">
        <form method = "post" action="http://cms.dev/admin/pagelist/addpage">
            Title <input id = "input" type="text" name="title" /><br>
            <textarea id = "input" name = "content" rows = '25' cols = '50'></textarea> <br>
            <button id = "submit" type="submit" name = "submit" value="submit">Submit </button>
        </form>

        <form method = "post" action = "http://cms.dev/admin/login/post">
            <input type = "hidden" name = "userName" value = "<?php echo $_SESSION['userName'];?>">
            <!--check about fixing password when it is changed-->
            <input type = "hidden" name = "password" value = "<?php echo $_SESSION['password'];?>">
            <input id = "submit" type = "submit" value = "Back"/>
        </form>
    </div>
    <div id = "footer"></div>
</div>



<?php

echo $this->get('pageId');
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

//Display pages as a table

?>

</body>
</html>