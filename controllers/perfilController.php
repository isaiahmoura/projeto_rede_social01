<?php

class perfilController extends controller {

	public function __construct() {
        $u = new usuarios();
	}

	public function index($uid) {
		$data = array();
		$usuarios = new usuarios();
		$posts = new posts();

		$uid = $_SESSION['rede_social'];

		// model_usuarios
		$data['get_user_data'] = $usuarios->get_user_data($uid);
		$data['get_usuarios'] = $usuarios->get_usuarios($uid);

		// model_posts

		$this->loadTemplate('perfil', $data);
	}
	
}