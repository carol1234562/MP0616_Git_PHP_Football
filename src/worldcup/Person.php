<?php

namespace WorldCup;

//
abstract class Person {
    protected string $name;
    private int $age = 0;

    public function __construct(string $name = "") {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge(int $age) : void {
        $this->age = $age;
    }

    public function run() {
        echo "Running...\n";
    }
}

