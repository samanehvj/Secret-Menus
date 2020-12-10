<?php

abstract class Controller
{
    public $title;
    public $data;

    public function loadView(string $viewFilePath)
    {
        ob_start();

        include($viewFilePath);
        $response = ob_get_contents();

        ob_clean();

        return $response;
    }

    abstract protected function err();
}
