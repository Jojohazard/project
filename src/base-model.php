<?php
require_once __DIR__ . '/column.php';

class BaseModel {
    protected $table;
    protected $primary;
    protected $columns = [];

    protected function __construct($table) {
        $this->table = $table;
    }

    protected function addColumn(Column $column) {
        $this->columns[] = $column;
    }
}