<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href="http://cms.dev/assets/css/main.css">
</head>
<body>

<div class = "container">

    <div id = "header">
        <?php include('app/Design/Temp/Header.php');?>
    </div>

    <div id = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div id = "sidebar">

        <form method = "post" action = "http://cms.dev/admin/edit/page">
            <input id = "inputNum" type = "number" name = "pageId">
            <input id = "submitNum" type = "submit" name = "submit" value = "Edit Page">
    </div>

    <div id = "content">
        <h1><?php echo $_SESSION['value1'];?></h1>

    </div>
    <div id = "footer"></div>
</div>
<?php

//echo $this->get('pageId');
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

//Display pages as a table

?>

</body>
</html>