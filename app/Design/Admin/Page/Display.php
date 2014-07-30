<?php $page = $this->get('page');
$title = $page[0][0]['title'];?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>/assets/css/page.css">

</head>
<body>

<div class = "container">

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>/assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>/assets/css/page.css">

    <div class = "content">
        <div class = "title">
            <h3><?php echo $page[0][0]['title'];?></h3> <br>
        </div>
        <div class = "page">
            <?php echo $page[0][0]['content'];?>
        </div>
    </div>
    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>

</div>

</body>
</html>