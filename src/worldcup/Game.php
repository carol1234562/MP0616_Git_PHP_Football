<?php

namespace WorldCup;

use DateTime;
use WorldCup\Field;
use WorldCup\Ball;
use WorldCup\Team;
use WorldCup\Coach;
use WorldCup\Goalkeeper;
use WorldCup\Defender;
use WorldCup\Midfielder;
use WorldCup\Forward;

/**
 * Class to define the game
 */
class Game {
    public $field;
    public $date;
    public $ball;
    public $teams;

    public function getField() {
        return $this->field;
    }

    public function setField($field) {
        $this->field = $field;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getBall() {
        return $this->ball;
    }

    public function setBall($ball) {
        $this->ball = $ball;
    }

    public function getTeams() {
        return $this->teams;
    }

    public function setTeams($teams) {
        $this->teams = $teams;
    }

    public function main() {
        echo "starting application<br>";
        
        $this->setField(new Field(100));
        $this->setDate(new DateTime());
        $this->setBall(new Ball());
        // create players team A
        $listA = [];
        $listA[] = new Goalkeeper();
        $listA[] = new Defender();
        $listA[] = new Defender();
        $listA[] = new Defender();
        $listA[] = new Defender();
        $listA[] = new Midfielder();
        $listA[] = new Midfielder();
        $listA[] = new Midfielder();
        $listA[] = new Midfielder();
        $listA[] = new Forward();
        $listA[] = new Forward();

        // create players team B
        $listB = [];
        $listB[] = new Goalkeeper();
        $listB[] = new Defender();
        $listB[] = new Defender();
        $listB[] = new Defender();
        $listB[] = new Defender();
        $listB[] = new Midfielder();
        $listB[] = new Midfielder();
        $listB[] = new Midfielder();
        $listB[] = new Midfielder();
        $listB[] = new Forward();
        $listB[] = new Forward();

        $teamA = new Team("NewTeam");
        $teamA->setPlayers($listA);
        $teamA->setCoach(new Coach());

        $teamB = new Team("Maped");
        $teamB->setPlayers($listB);
        $teamB->setCoach(new Coach());

        $teams = [];
        $teams[] = $teamA;
        $teams[] = $teamB;
        $this->setTeams($teams);

        $this->start();
    }

    public function start() {
        echo "starting match actions...<br>";

        for ($i = 0; $i < 10; $i++) {
            echo "<br>--- Action " . ($i + 1) . " ---<br>";

            // select random team
            $teamIndex = array_rand($this->teams);
            $selectedTeam = $this->teams[$teamIndex];
            echo "Team: " . $selectedTeam->getName() . "<br>";

            // select random player
            $players = $selectedTeam->getPlayers();
            $playerIndex = array_rand($players);
            $selectedPlayer = $players[$playerIndex];
            echo "Player type: " . (new \ReflectionClass($selectedPlayer))->getShortName() . "<br>";

            // common actions
            $selectedPlayer->run();
            $selectedPlayer->passBall();

            // specific actions
            if ($selectedPlayer instanceof Forward) {
                $selectedPlayer->drible();
                $selectedPlayer->kickBall($this->getBall());
            } else if ($selectedPlayer instanceof Midfielder) {
                $selectedPlayer->organize();
            } else if ($selectedPlayer instanceof Defender) {
                $selectedPlayer->steal($this->getBall());
            } else if ($selectedPlayer instanceof Goalkeeper) {
                $selectedPlayer->block($this->getBall());
            }
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Match Results</title>
    </head>
    <body>
        <h1>Simulación del Partido</h1>
        <pre>";
    
    $game = new Game();
    $game->main();

    echo "</pre>
        <br>
        <a href='index.php'>Volver al inicio</a>
    </body>
    </html>";
}