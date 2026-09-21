<?php 

namespace WorldCup;

class Person {
    
    private $age = 0;

    /**
     * Get the value of age
     */ 
    public function getAge(){
        return $this->age;
    }

    /**
     * Set the value of age
     */ 
    public function setAge($age) {
        $this->age = $age;
    }

    public function run() {
        echo "Running...\n";
    }
}




