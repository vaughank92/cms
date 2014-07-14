<?php $page = $this->get('Page') ?>
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
        Title <input id ="input" type="text" name="title" value = "<?php echo $page['title'];?>"/><br>
        <textarea id = "input" name = "content" rows = '25' cols = '50'
            ><?php echo $page['content']?></textarea> <br>
        <input name="id" type="hidden" value="<?php echo $page['id'] ?>"/>
        <button id = "submit" type="submit" name = "submit" value="submit">Submit </button>
    </form>
</div>
</body>
</html>