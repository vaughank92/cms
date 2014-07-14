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
    </div>

    <div id = "content">
        <table>
            <?php foreach($this->get('pages')as $page): ?>
                <tr>
                    <td><?php echo $page['title'] ?></td>
                    <td><?php echo $page['content'] ?></td>
                    <td><a href="<?php echo App::getBaseUrl() ?>admin/edit/page?id=<?php echo $page['pageId'] ?>">Edit Page</a></td>
                    <td><a href="<?php echo App::getBaseUrl() ?>admin/edit/page?id=<?php echo $page['pageId'] ?>">Preview Page</a></td>
                </tr>
            <?php endforeach ?>
        </table>
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