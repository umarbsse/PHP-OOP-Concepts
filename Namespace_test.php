<?php 
    ##include 'Namespaces.php';
    ##$table = new Html\Table();
    ##$table->title="Employee Details";
    ##$table->numRows = 10;

    ##$row = new Html\Row();
    ##$row->numCells = 20;

    namespace Html;



    
    include 'Namespaces.php';
    $table = new Table();
    $table->title="Govt Details";
    $table->numRows = 10;

    $row = new Row();
    $row->numCells = 20;









?>

<html>
    <body>
        <?php echo $table->message(); ?>
        <?php echo $row->message(); ?>
    </body>
</html>