<?php

class Player {
    public $name;
    public $age;
    public $job;
    public $salary;

    /**
     * @param $properties array of properties to be set in the Player
     */
    public function setProperties($properties) {
        foreach($properties as $key => $value) {
            if (property_exists($this, $key) ) {
                $this->$key = $value;
            }
        }
    }
}

?>