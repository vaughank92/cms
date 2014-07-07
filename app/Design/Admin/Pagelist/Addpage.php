<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method = "post" action="http://cms.dev/admin/pagelist/addpage">
    Title<input type="text" name="title" /><br>
    <textarea name = "content" rows = '30' cols = '50'></textarea> <br>
    <button type="submit" name = "submit" value="submit">Submit </button>
</form>



<?php

echo $this->get('pageId');
//echo $this->get('password');
//echo $this->get('content');
//echo $this->get('footer');

//Display pages as a table

?>

</body>
</html>