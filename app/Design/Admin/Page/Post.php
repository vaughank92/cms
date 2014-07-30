<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Pages</title>
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>/assets/css/main.css">

</head>
<body>

<div class = "container">

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>/assets/css/main.css">

    <div class = "content">
        <table class = "text table table-striped">
            <thead>
                <tr class = "log">

                    <th>PageId</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $pageArray = $this->get('pages');
            if(sizeof($pageArray) == 0){?>
                <tr class = "log">
                    There are no pages
                </tr>
            <?php } else {
            foreach($pageArray[0] as $page): ?>
                <tr>
                    <td><?php echo $page['pageId'] ?></td>
                    <td><?php echo $page['title'] ?></td>
                    <td><a href="<?php echo App::getBaseUrl() ?>admin/page/page?id=<?php echo $page['pageId'] ?>">Edit Page</a></td>
                    <td><a href="<?php echo App::getBaseUrl() ?>admin/page/deletepage?id=<?php echo $page['pageId']?>">Delete Page</a></td>
                    <td><a href="<?php echo App::getBaseUrl() ?>admin/page/display?id=<?php echo $page['pageId'] ?>">Preview Page</a></td>
                </tr>
            <?php endforeach; } ?>
            </tbody>
        </table>
    </div>
    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>
<?php

//echo $page['title'];
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

//Display pages as a table

?>

</body>
</html>