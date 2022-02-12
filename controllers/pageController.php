<?php

class pageController extends controller {

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
		$data['get_page_info'] = $pages->get_all_pages();
		// model_posts
		$data['get_posts'] = $posts->get_posts();
		
		$this->loadTemplate('paginas', $data);
	}

	public function ver_pagina($id_page) {
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
		$data['get_page_info'] = $pages->get_page_info($id_page);
		// model_posts
		$data['get_posts'] = $posts->get_posts();
		
		$this->loadTemplate('page_view', $data);
	}

    public function criar_pagina() {
		$data = array();
		$usuarios = new usuarios();
		$pages = new pages();

		$uid = $_SESSION['rede_social'];

		// model_usuarios
		$data['get_user_data'] = $usuarios->get_user_data($uid);
		$data['get_usuarios'] = $usuarios->get_usuarios($uid);
        $data['get_my_shortcut'] = $usuarios->get_my_shortcut($uid);

        // model_page

        if(isset($_POST['btn_page'])) {
            $page_title = addslashes($_POST['page_title']);
            if(!empty($page_title)) {
                $pages->new_page($uid,$page_title);
            }else {
                echo "Preencha o titulo da Página";
            }
        }

		// model_posts
		
		$this->loadTemplate('criar_pagina', $data);
	}
}