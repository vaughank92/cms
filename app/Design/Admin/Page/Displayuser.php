<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
   <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">

    <title>User Pages</title>
</head>
<body>

<div class="container">

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
    <div class = "content">
        <table class = "text table table-striped">
            <thead>
            <tr class = "log">
                <th>PageId</th>
                <th>UserId</th>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $pageArray = $this->get('pages');
            foreach($pageArray[0] as $page): ?>
                <tr>
                    <td><?php echo $page['pageId']?></td>
                    <td><?php echo $page['userId'] ?></td>
                    <td><?php echo $page['title']?></td>
                    <td><a href = "<?php echo App::getBaseUrl()?>admin/page/display?id=<?php echo $page['pageId']?>">View Page</a></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>

</body>


</html>