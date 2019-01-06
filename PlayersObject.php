<?php

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

// This would not be here, just using as a quick loader for the example
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


class PlayersObject {
    private $dataStore;

    public function __construct($dataStore) {
        $this->dataStore = $dataStore;
    }

    /**
     * @return array of stdClass Class implementation of the player with name, age, job, salary.
     */
    function readPlayers() {
        return $this->dataStore->readPlayers();
    }

    /**
     * @param $player stdClass Class implementation of the player with name, age, job, salary.
     */
    function writePlayer($player) {
        $this->dataStore->writePlayer($player);
    }
}

// These would be dependency injected in from some other means
$template = php_sapi_name() === 'cli' ? 'PlayersCLIView.php' : 'PlayersHTMLView.php';
$dataStore = new ArrayPlayerDataStore();

// Json based dataStore
//$dataStore = new JSONPlayerDataStore();

// File based dataStore
//$filename = 'playerdata.json';
//$dataStore = new FilePlayerDataStore($filename);


$playersObject = new PlayersObject($dataStore);
$view = new View($template);
$view->setProperty('players', $playersObject->readPlayers());
$view->render();

?>