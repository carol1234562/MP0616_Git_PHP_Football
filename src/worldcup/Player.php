<?php

namespace WorldCup;


use WorldCup\Person;

class Player extends Person{
    protected string $position;

    public function __construct(string $name = "", string $position = ""){
        parent::__construct($name);
        $this->position = $position;

    }
    public function getPosition(): string{
        return $this->position;
        
    }

    public function setPosition(string $position): void{
        $this->position = $position;
    }

    public function passBall (): void {
        echo "passing the ball\n"; 

    }
}