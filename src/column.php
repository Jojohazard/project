<?php

class Column {
    private const DATA_TYPES = ['string', 'int'];
    private $name;
    private $type;

    public function __construct(string $name, string $type) {
        if (!array_key_exists($type, self::DATA_TYPES)) {
            return;
        }
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getType(): string {
        return $this->type;
    }
}