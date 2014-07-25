<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Page</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
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
    <div class = "header">
        <?php include("app/Design/Temp/Header.php");?>
    </div>
    <div class = "navbar">
        <?php include("app/Design/Temp/Navbar.php");?>
    </div>
    <div class = "content">
        <form class = "text" method = "post" action="<?php echo App::getBaseUrl()?>admin/page/addpage">
            <b>Title</b> <input class = "title" type="text" name="title" /><br>
            <textarea id = "textarea" class = "mceEditor" name = "content" rows = '25' cols = '50'></textarea> <br>
            <button class = "submit" type="submit" name = "submit" value="submit">Submit</button>
        </form>
    </div>

    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>

</body>
</html>