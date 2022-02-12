<?php

class loginController extends controller {

	public function __construct() {
        $u = new usuarios();
        $u->logado();
	}

	public function index() {
        unset($_SESSION['flash']);
		$data = array();
		$u = new usuarios();

        if(isset($_POST['acessar'])) {
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            if(!empty($email) && !empty($senha)) {
                $u->login($email,$senha);
            }else {
                $_SESSION['flash'] = 'Preencha todos os campos';
            }
        }
		$this->loadView('login', $data);
	}
}