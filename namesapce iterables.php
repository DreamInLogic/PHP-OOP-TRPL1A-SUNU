<?php

// 1. Namespace

namespace Html;

class Table {
    public $title = "";
    public $rows = 0;

    public function info() {
        echo "<p>$this->title has $this->rows rows.</p>";
    }
}

$table = new \Html\Table();
$table->title = "My table";
$table->rows = 5;
$table->info();
?>

<hr>

<?php

// 2. Iterables

class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items) {
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key() {
        return $this->pointer;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        return $this->pointer < count($this->items);
    }
}

function printIterable(iterable $myIterable) {
    foreach ($myIterable as $item) {
        echo $item . " ";
    }
}

$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
?>