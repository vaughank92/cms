<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/css/main.css">
</head>
<body>

<div class = "container">
    <div class = "header">
        <?php include('app/Design/Temp/Header.php');?>
    </div>
    <div class = "navbar">
        <?php include ('app/Design/Temp/Navbar.php');?>
    </div>
    <div class = "content">
        <div class = "log">
            <form class = "text" method = "post" action="<?php echo App::getBaseUrl()?>contact/form/submit">
                <div class = "name">
                    <label for = "name">Name</label>
                    <input class = "input" type="text" name="name"/>
                </div>

                <div class = "email">
                    <label for = "email">E-mail</label>
                    <input class = "input" type="text" name="email"/>
                </div>

                <div class = "comment">
                    <label for = "comment">Comment</label>
                    <textarea class = "input" name = "comment" rows = '4' cols = '25'></textarea>
                </div>
                <input class = "submit" type="submit" name = "submit" value="Submit" />
            </form>
        </div>
    </div>

    <div class = "footer">
        <?php include('app/Design/Temp/Footer.php');?>
    </div>
</div>


<?php

/*echo $this->get('name');
echo $this->get('email');
echo $this->get('comment');*/

/*echo $_POST['name'].' ';
echo $_POST['email'].' ';
echo $_POST['comment'];*/

?>

</body>
</html>