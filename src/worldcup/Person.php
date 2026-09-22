<<<<<<< HEAD
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




=======
<?php
namespace WorldCup;

abstract class Person {
    protected string $name;

    public function __construct(string $name = "") {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

}
>>>>>>> a2a984d135f5ce9859f12bcb2cf3ef761c9dde32
