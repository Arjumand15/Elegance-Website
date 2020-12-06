<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
        </div>
            <nav id="naigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Items.php">Items</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="login.php">Register</a></li>
                    <li><a href="ind.php">Feedback</a></li>
                </ul>
            </nav>
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            <div id="sidebar">
                
            </div>
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
