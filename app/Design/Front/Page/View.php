<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--<form action="http://cms.dev/admin/login/post">
    <input type="text" name="username" />
    <input type="text" name="password" />
    <input type="submit" value="submit" />
</form> -->
<?php

echo $this->get('header');
echo $this->get('title');
echo $this->get('content');
echo $this->get('footer');

?>

</body>
</html>