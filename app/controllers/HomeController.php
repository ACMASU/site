<?php

class HomeController extends Controller
{

    public function index($name = '')
    {
        $data = [
            'page' => 'Home',
        ];

        return ['view' => 'home/index', 'data' => $data];
    }

}
