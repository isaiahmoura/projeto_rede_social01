<?php

class homeController extends controller {

	public function __construct() {
		$usuarios = new usuarios();
		$usuarios->deslogado();
	}

	public function index() {
		$data = array();
		$usuarios = new usuarios();
		$pages = new pages();
		$posts = new posts();

		$uid = $_SESSION['rede_social'];

		// model_usuarios
		$data['get_user_data'] = $usuarios->get_user_data($uid);
		$data['get_usuarios'] = $usuarios->get_usuarios($uid);
		$data['get_my_shortcut'] = $usuarios->get_my_shortcut($uid);

		// model_pages

		// model_posts
		$data['get_feed'] = $posts->get_feed();
		
		$this->loadTemplate('home', $data);
	}

	public function listar_usuarios($uid) {
		$data = array();
		$usuarios = new usuarios();
		$pages = new pages();
		$posts = new posts();

		$uid = $_SESSION['rede_social'];

		// model_usuarios
		$data['get_user_data'] = $usuarios->get_user_data($uid);
		$data['get_usuarios'] = $usuarios->get_usuarios($uid);
		$data['get_my_shortcut'] = $usuarios->get_my_shortcut($uid);
		$data['get_usuarios_list'] = $usuarios->get_usuarios_list($uid);

		// model_pages

		// model_posts
		$data['get_feed'] = $posts->get_feed();
		
		$this->loadTemplate('listar_usuarios', $data);
	}
}