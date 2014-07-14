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
    <div id = "navbar"></div>
    <div id = "content">
        <form method = "post" action="http://cms.dev/contact/form/submit">
            Name<input id = "input" type="text" name="name" /><br>
            E-mail<input id = "input" type="text" name="email" /><br>
            Comments <textarea id = "input" name = "comment" rows = '4' cols = '25'></textarea> <br>
            <input id = "submit" type="submit" name = "submit" value="submit" />
        </form></div>
    <div id = "footer"></div>
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