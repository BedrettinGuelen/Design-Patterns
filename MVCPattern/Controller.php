<?php

namespace MVCPattern;

class Controller
{
    protected Model $model;
    protected View $view;

    public function __construct(Model $model, View $view)
    {
        $this->model = $model;
        $this->view = $view;
    }


    public function updateView(): void
    {
        echo $this->view->output($this->model);
    }

    public function setModel(Model $model): void
    {
        $this->model = $model;
    }
}