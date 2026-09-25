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
        $effects = [
            "with spin",
            "too high",
            "off target",
            "straight to the keeper",
            "into the top corner",
            "with great power",
            "weak shot",
            "curled beautifully"
        ];

        $effects = [
"with incredible hyper-speed power",
"straight into the top corner like a rocket",
"with unstoppable force"
];
    }
}
