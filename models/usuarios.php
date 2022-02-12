<?php

class usuarios extends model {

	public function logado() {
		if(isset($_SESSION['rede_social']) && !empty($_SESSION['rede_social'])) {
			header("Location: ".BASE_URL."home");
		}
	}

	public function deslogado() {
		if(!isset($_SESSION['rede_social']) && empty($_SESSION['rede_social'])) {
			header("Location: ".BASE_URL."login");
		}
	}

	public function get_user_data($uid) {
		$array = array();

		$sql = "SELECT id,nome,email,
		
		(SELECT count(*) FROM relacionamentos WHERE usuario_para = '$uid' AND status_friend = '1') AS
		new_request
		
		FROM usuarios WHERE id = '$uid'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function user_info($uid) {
		$array = array();

		$sql = "SELECT id,nome,email,user_img,adm FROM usuarios WHERE id = '$uid'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function get_usuarios($uid) {
		$array = array();

		$sql = "SELECT id,nome,email,user_img,
		
		(SELECT count(*) FROM relacionamentos WHERE 
		relacionamentos.usuario_de = '$uid' AND usuario_para = usuarios.id 
		OR relacionamentos.usuario_de = usuarios.id AND usuario_para = '$uid' AND status_friend = '1'
		) AS add_pendente
		
		FROM usuarios WHERE id != '$uid' ORDER BY rand() LIMIT 3";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function get_usuarios_list($uid) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id != '$uid' ORDER BY rand()";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function login($email,$senha) {

		$sql = "SELECT email FROM usuarios WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			
			$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0) {
				$data = $sql->fetch();
				$_SESSION['rede_social'] = $data['id'];
				header("Location: ".BASE_URL."home");
			}else {
				$_SESSION['flash'] = 'Senha incorreta.';
			}

		}else {
			$_SESSION['flash'] = 'E-mail inexistente.';
		}
	}

	public function cadastro($nome,$email,$senha,$confirmar_senha) {
		
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() == 0) {
			if($confirmar_senha != $senha) {
				$_SESSION['erro_box'] = 'Senha e confirmar senha não coincidem';
			}else {
				$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
				$sql = $this->db->query($sql);

				if($sql->rowCount() > 0) {
					$sql = "SELECT id FROM usuarios WHERE email = '$email'";
					$sql = $this->db->query($sql);

					if($sql->rowCount() > 0) {
						$uid = $sql->fetch();
						$_SESSION['cinemando'] = $uid['id'];
						header("Location: ".BASE_URL."home");
					}
				}
			}
		}else {
			$_SESSION['erro_box'] = 'E-mail já esta cadastrado';
		}
	}

	public function get_my_shortcut($uid) {
		$array = array();
		$limit = 4;

		$sql = "SELECT *,
		(SELECT id FROM grupos WHERE grupos.id_adm = '$uid') AS
		id_grupos,
		(SELECT grupot_titulo FROM grupos WHERE grupos.id_adm = '$uid') AS
		grupos_titulo
		FROM paginas WHERE id_adm = '$uid' ORDER BY rand() LIMIT $limit";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}