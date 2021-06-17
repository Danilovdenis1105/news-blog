<?php


class View
{
    public $template;
    public $page;

    public function __construct($template,$page)
    {
        $this->template = $template;
        $this->page = $page;
    }

    public function render()
    {
        include_once 'views' . DIRECTORY_SEPARATOR . $this->template;
    }
}