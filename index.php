<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        $pages = array(
            array("text"=>"Class","url"=>"Class.php"),
            array("text"=>"Constructor","url"=>"Constructor.php"),
            array("text"=>"Destructor","url"=>"Destructor.php"),
        );
    ?>
    <ul>
        <?php for ($i=0; $i <count($pages) ; $i++) { ?>
            <li><a href="http://localhost/PHP%20OOP%20Concepts/<?php echo $pages[$i]['url']; ?>" target="_black"><?php echo $pages[$i]['text']; ?></a></li>
        <?php } ?>
    </ul>
</body>
</html>