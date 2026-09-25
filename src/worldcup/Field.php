<?php

namespace WorldCup;

class Field {
    public int $size;

    public function __construct(int $size) {
        $this->size = $size;
    }

    /**
     * Get the size
     */
    public function getSize(): int {
        return $this->size;
    }

    /**
     * Set the size
     */
    public function setSize(int $size): void {
        $this->size = $size;
    }

    public function light(): void {
        echo "switching the lights\n";
    }
}