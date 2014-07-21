<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/footer.css">
    <title> Footer </title>
</head>

<body class = "footer">
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
</body>
</html>