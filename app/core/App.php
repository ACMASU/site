<?php

class App
{

    protected $controller = 'HomeController';

    protected $method = 'index';

    protected $params = [];

    protected $view = ['view' => 'home/index', 'data' => []];

    public function __construct()
    {
        $url = $this->parseURL();

        if (file_exists('../app/controllers/' . $url[0] . 'Controller.php')) {
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->params['post'] = $_POST;
            $this->view = call_user_func([$this->controller, $this->method], $this->params);
        } else {
            $this->view = call_user_func_array([$this->controller, $this->method], $this->params);
        }


    }

    public function parseURL()
    {
        $url = [];

        if (isset($_GET['url'])) {
            $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }

        return $url;
    }

    public function render(){
        $this->controller->view($this->view['view'], $this->view['data']);
    }

}


