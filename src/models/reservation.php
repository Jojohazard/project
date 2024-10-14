<?php
require_once __DIR__ . '/../base-model.php';

class Reservation extends BaseModel {
    public function __construct(string $table) {
        parent::__construct($table);
        $this->primary = 'id';
    }
}