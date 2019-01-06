<?php

class View {
    private $template;
    private $viewModel;
    public function __construct($template) {
        $this->template = $template;
        $this->viewModel = new \stdClass();
    }

    public function Render()
    {
        require $this->template;;
    }

    public function setViewModelProperty($key, $value) {
        $this->viewModel->$key = $value;
    }

}