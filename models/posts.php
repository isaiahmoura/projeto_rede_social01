<?php

class posts extends model {

    public function enviar_post($post_txt,$uid) {
        $sql = "INSERT INTO posts SET id_usuario = '$uid', data_post = NOW(), post_txt = '$post_txt'";
        $sql = $this->db->query($sql);
        header("Location: ".BASE_URL);
    }

    public function apagar_post($id_post) {
        $sql = "DELETE FROM posts WHERE id = '$id_post'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $sql = "DELETE FROM posts_like WHERE id_post = '$id_post'";
            $sql = $this->db->query($sql);
        }
    }

    public function add_post_like($uid,$id_post) {
        $sql = "INSERT INTO posts_like SET id_post = '$id_post', id_usuario = '$uid'";
        $sql = $this->db->query($sql);
        header("Location: ".BASE_URL."home");
    }

    public function del_post_like($uid,$id_post) {
        $sql = "DELETE FROM posts_like WHERE id_post = '$id_post' AND id_usuario = '$uid'";
        $sql = $this->db->query($sql);
        header("Location: ".BASE_URL."home");
    }

    public function get_feed() {
        $array = array();
        $id_lista[] = $_SESSION['rede_social'];
        $uid = $_SESSION['rede_social'];

        $sql = "SELECT *,
        
        (SELECT nome FROM usuarios WHERE posts.id_usuario = usuarios.id) AS
        nome,
        (SELECT count(*) FROM posts_like WHERE posts_like.id_post = posts.id) AS
        posts_likes,
        (SELECT count(*) FROM posts_like WHERE posts_like.id_usuario = '$uid') AS
        liked
        
        FROM posts ORDER BY data_post DESC";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}