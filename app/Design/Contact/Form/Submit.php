<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method = "post" action="http://cms.dev/contact/form/submit">
    Name<input type="text" name="name" /><br>
    E-mail<input type="password" name="email" /><br>
    Comments<textarea rows = '4' cols = '25'></textarea><br>
    <input type="submit" name = "submit" value="submit" />
</form>
<?php

echo $this->get('name');
echo $this->get('email');
echo $this->get('comment');

?>

</body>
</html>