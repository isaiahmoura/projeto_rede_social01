<?php

class erroController extends controller {

	public function __construct() {
        $u = new usuarios();
	}

	public function index() {
		$data = array();
		$u = new usuarios();

		if(isset($_SESSION['cinemando']) && !empty($_SESSION['cinemando'])) {
			$data['user_data'] = $u->user_data($_SESSION['cinemando']);
		}

		$this->loadTemplate('erro', $data);
	}
}