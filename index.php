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
            array("text"=>"Access Modifiers","url"=>"Access_Modifiers.php"),
            array("text"=>"Inheritance","url"=>"Inheritance.php"),
            array("text"=>"Constants","url"=>"Constants.php"),
            array("text"=>"Abstract Classes","url"=>"Abstract_Classes.php"),
            array("text"=>"Interfaces","url"=>"Interfaces.php"),
            array("text"=>"Traits","url"=>"Traits.php"),
            array("text"=>"Static Properties","url"=>"Static_Properties.php"),
            array("text"=>"Namespaces","url"=>"Namespace_test.php"),
        );
    ?>
    <ul>
        <?php for ($i=0; $i <count($pages) ; $i++) { ?>
            <li><a href="http://localhost/PHP%20OOP%20Concepts/<?php echo $pages[$i]['url']; ?>" target="_black"><?php echo $pages[$i]['text']; ?></a></li>
        <?php } ?>
    </ul>
</body>
</html>