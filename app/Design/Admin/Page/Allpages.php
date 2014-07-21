<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <title>All Pages</title>
</head>
<body>

<div class="container">
    <div class = "header">
        <?php include ('app/Design/Temp/Header.php');?>
    </div>
    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>
    <div class = "content">
        <table class = "text">
            <tr class = "log">
                <td>PageId</td>
                <td>UserId</td>
                <td>Title</td>
            </tr>
            <?php
            $pageArray = $this->get('pages');
            foreach($pageArray[0] as $page): ?>
                <tr>
                    <td><?php echo $page['pageId']?></td>
                    <td><a href = "<?php echo App::getBaseUrl()?>admin/page/displayuser?userid=<?php echo $page['userId'] ?>"><?php echo $page['userId'] ?></a></td>
                    <td><?php echo $page['title']?></td>
                    <td><a href = "<?php echo App::getBaseUrl()?>admin/page/display?id=<?php echo $page['pageId']?>">View Page</a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>

</body>


</html>