<?php

class Home extends Controller{

	public function index($name = '') {
		$user = $this->model('User');
        $user->name = $name;

        $data = [
            'page' => 'Home',
            'user' => $user
        ];

        $this->view('home/index', $data);
	}
}
