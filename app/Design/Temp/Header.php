<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "http://cms.dev/assets/css/header.css"

</head>

<body>
<h1><?php if(isset($_SESSION['userName']))
    {
        echo $_SESSION['userName'];
    }
    else
    {
        echo "Welcome";
    }?></h1>

</body>
</html>