<?php

namespace MVCPattern;

require_once "Model.php";

class View
{
    public function output(Model $model): string
    {
        return "Name: \t\t" . $model->getFirstName() . "\nLastname \t" . $model->getLastName() . "\nEmail: \t\t" . $model->getEmail();
    }
}