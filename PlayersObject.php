<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

/*
    Development Exercise

      The following code is poorly designed and error prone. Refactor the objects below to follow a more SOLID design.
      Keep in mind the fundamentals of MVVM/MVC and Single-responsibility when refactoring.

      Further, the refactored code should be flexible enough to easily allow the addition of different display
        methods, as well as additional read and write methods.

      Feel free to add as many additional classes and interfaces as you see fit.

      Note: Please create a fork of the https://github.com/BrandonLegault/exercise repository and commit your changes
        to your fork. The goal here is not 100% correctness, but instead a glimpse into how you
        approach refactoring/redesigning bad code. Commit often to your fork.

*/

class PlayersObject {
    private $dataStore;

    public function __construct($dataStore) {
        $this->dataStore = $dataStore;
    }

    function readPlayers() {
        return $this->dataStore->readPlayers();
    }

    /**
     * @param $player \stdClass Class implementation of the player with name, age, job, salary.
     */
    function writePlayer($player) {
        $this->dataStore->writePlayer($player);
    }
}

$template = php_sapi_name() === 'cli' ? 'CLIView.php' : 'HTMLView.php';
$dataStore = new ArrayPlayerDataStore();


$playersObject = new PlayersObject($dataStore);
$view = new View($template);
$view->setViewModelProperty('players', $playersObject->readPlayers());
$view->render();

?>