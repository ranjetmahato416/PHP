<?php
namespace Html;
class Table{
    public $title = "";
    public $numRows = 0;

    function message(){
        echo "Table " .$this->title. ' has ' .$this->numRows. ' Rows <br>';
    }
}

class Row{
    public $numCells = 0;
    function message(){
        echo "Rows has " .$this->numCells. ' Cells <br>';
    }
}
?>