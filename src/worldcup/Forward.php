<?php

namespace WorldCup;

/**
 * Class to define the forward
 */
class Forward extends Player {
    public $killer; 

    public function drible() {
        echo "dribbling\n";
    }

    /**
     * Get the killer
     */
    public function isKiller() {
        return $this->killer;
    }

    /**
     * Set the mark
     */
    public function setKiller($killer) {
        $this->killer = $killer;
    }

    public function kick(Ball $ball) {
        $effects = ["with incredible hyper-speed power",     
        "straight into the top corner like a rocket",     
        "with unstoppable forcé"
        ];

        $effects = [
    "curled delicately into the bottom corner",
    "placed softly past the goalkeeper",
    "with extreme tactical precision"
];
    }
}
