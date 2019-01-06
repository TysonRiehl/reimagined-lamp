<?php

class View {
    private $template;
    private $properties;

    public function __construct($template) {
        $this->template = $template;
        $this->properties = new stdClass();
    }

    public function Render()
    {
        require $this->template;;
    }

    public function setProperty($key, $value) {
        $this->properties->$key = $value;
    }

}