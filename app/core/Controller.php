<?php

class Controller
{
    public function model($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';
            return new $model();
        } else {
            echo 'Model not found.';
            return 1;
        }
    }

    public function view($view, $data)
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/base.php';
        } else {
            echo 'View not found.';
            return 1;
        }
    }

}
