<?php

namespace WorldCup;

use WorldCup\Player;

/**
 * Class to define the midfielder
 */
class Midfielder extends Player {
    private $vision;

    /**
     * Get the vision
     */
    public function isVision() {
        return $this->vision;
    }

    /**
     * Set the vision
     */
    public function setVision($vision) {
        $this->vision = $vision;
    }

    public function organize() {
        echo "organizing\n";
    }
}
