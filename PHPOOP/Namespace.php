<?php

include "HTML.php";
use Html\Row as R;//Ginving class an alias

$table = new Html\Table();
$table->title = "Books";
$table->numRows = 5;

$row = new R();
$row->numCells = 4;

?>
<html>
    <body>
        <?php $table->message(); ?>
        <?php $row->message(); ?>
    </body>
</html>