<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">

<!--    <link rel = "stylesheet" href = "<?php /*echo App::getBaseUrl()*/?>assets/bootstrap/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src = <?php /*echo App::getBaseUrl()*/?>assets/bootstrap/js/bootstrap.min.js"></script>-->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/footer.css">
   <title> Footer </title>
</head>

<body>
<nav role = "navigation" class = "footerPage navbar navbar-default">
    <div class = "container-fluid">
        <div class = "footerText">
            <?php if(isset($page[0][0]['pageId']))
            {
                if($page[0][0]['modified'] == '0000-00-00 00:00:00')
                {?>

                   Last Modified: <?php echo $page[0][0]['created'];
                }
                else {?>
                    Last Modified: <?php echo $page[0][0]['modified'];
                }?>

                <br>
                Created By: <a href =
                               "<?php echo App::getBaseUrl()?>admin/page/displayuser?userid=<?php echo $page[0][0]['userId']?>">
                                <?php echo $page[0][0]['userName'] ?></a>

                <?php }?>
        </div>
    </div>
</nav>
</body>
</html>