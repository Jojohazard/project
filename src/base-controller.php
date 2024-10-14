<?php
require_once __DIR__ . '/base-models.php';
class BaseController {
    protected BaseModel $model;

    protected function __construct(BaseModel $model) {
        $this->model = $model;
    }
}