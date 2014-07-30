<?php
$pages = App::getModel('page')->searchTitle();
$length = sizeof($pages);
if(isset($_SESSION['userName']))
{
    App::getModel('admin_user')->verifyLogin($_SESSION['userName'], $_SESSION['password']);

}?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo App::getBaseUrl()?>assets/bootstrap/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type = "text/javascript" src = "<?php echo App::getBaseUrl()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css">
    <script src= "http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src= "http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script type = "text/javascript">
        var data = [];
        <?php
        $i = 0;
        while($i<$length)
        {?>
            data[data.length] = <?php echo json_encode($pages[$i]);?>;
        <?php $i++;
          }?>

        $(function()
        {
            $("#search").autocomplete(
                {
                    source: data
                }
            );
        });
    </script>
    <link rel = "stylesheet" type = "text/css" href="<?php echo App::getBaseUrl()?>assets/css/navbar.css">
    <title> Navbar </title>
</head>

<body>
<div role = "navigation" class= "navbar navbar-default">
    <div class = "navbarPage container-fluid">
        <div class = "navbar-header">
            <button type = "button" data-target = ".navbar-collapse" data-toggle = "collapse" class = "navbar-toggle">
                <span class = "sr-only">Toggle Navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a href = "<?php echo App::getBaseUrl() ?>admin/login/post" class = "navbar-brand"><?php if(isset($_SESSION['userName']))
                {
                    echo $_SESSION['userName'];
                }
                else
                {
                    echo "Welcome";
                }?></a>
        </div>



        <div id = "navbarCollapse" class = "navLinks collapse navbar-collapse">
            <form role="search" class="search navbar-form navbar-right" method = "post" action = "<?php echo App::getBaseUrl()?>admin/page/searchpage">
                <div class = "form-group">
                    <input id = "search" name = "search" type = "text" placeholder="Search Titles" class = "form-control">
                </div>
            </form>


            <?php if(isset($_SESSION['userName'])){?>
            <ul class = "nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo App::getBaseUrl()?>admin/page/allpages">All Pages</a>
                </li>
                <li>
                    <a href="<?php echo App::getBaseUrl() ?>admin/page/post">My Pages</a>
                </li>
                <li>
                    <a href="<?php echo App::getBaseUrl() ?>admin/login/post">Account</a>
                </li>
                <li>
                    <a href="<?php echo App::getBaseUrl() ?>admin/login/out">Log Out</a>
                </li>
            </ul>
            <?php }else {?>
                <ul class = "nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo App::getBaseUrl()?>admin/page/allpages">All Pages</a>
                    </li>
                    <li>
                        <a href = "<?php echo App::getBaseUrl()?>users/manage/adduser">Create Account</a>
                    </li>
                    <li>
                        <a href = "<?php echo App::getBaseUrl()?>admin/login/index">Log In</a>
                    </li>
                    <li>
                        <a href="<?php echo App::getBaseUrl() ?>contact/form/submit">Contact</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>

</body>
</html>