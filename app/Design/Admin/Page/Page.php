<?php $page = $this->get('page');
$theme = $this->get('theme');
echo $theme;
$title = $page[0][0]['title'];?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/<?php echo $theme?>.css">
    <script type = "text/javascript" src="<?php echo App::getBaseUrl()?>tinymce/js/tinymce/tinymce.min.js"></script>
    <script type = "text/javascript">
        tinymce.init({
            mode: "exact",
            elements: "textarea",
            editor_selector: "mceEditor",

            plugins: "textcolor link image",
            toolbar: "insertfile undo redo | styleselect | forecolor backcolor | bold italic | alignleft aligncenter alignright alignjustify | " +
                "bullist numlist indent outdent | link image"
        });
    </script>

</head>
<body>

<div class = "container">

    <div class = "header"></div>
        <?php include('app/Design/Temp/Header.php');?>

    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>

    <div class = "content">

        <form class = "text" method = "post" action= "<?php echo App::getBaseUrl()?>admin/page/update">
            <b>Title</b> <input class = "title" type="text" name="title" value = "<?php echo $page[0][0]['title'];?>"/><br>
            <textarea id = "textarea" class = "page" name = "content" rows = '25' cols = '50'
                ><?php echo $page[0][0]['content']?></textarea> <br>
            <input name="id" type="hidden" value="<?php echo $page[0][0]['pageId'];?>">
            <input class = "submit" type="submit" name = "submit" value="Submit" >
        </form>
    </div>

    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>

</div>


</body>
</html>