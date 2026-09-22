<?php

namespace WorldCup;

class Ball{
    private string $material;
    private string $state; 

    public function __construct(string $material = "Leather", string $state = "In Play"){
        $this->material = $material;
        $this->state = $state;

    }
    public function getMaterial(): string{
        return $this->material;
    }

    public function getState(): string{
    return $this->state;
    }
    public function setMaterial(string $material): void{
        $this->material = $material;
    }
    public function setState(string $state): void{
        $this->state = $state;
    }


}