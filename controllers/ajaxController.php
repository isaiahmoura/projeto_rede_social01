<?php

class ajaxController extends controller {

	public function __construct() {
	}

    public function enviar_post() {
        $post_txt = addslashes($_POST['valor']);
        $uid = $_SESSION['rede_social'];
        $p = new posts();
        $p->enviar_post($post_txt,$uid);
    }

    public function apagar_post() {
        if(isset($_POST['id_post']) && !empty($_POST['id_post'])) {
            $posts = new posts();
            $id_post = addslashes($_POST['id_post']);
            $posts->apagar_post($id_post);
        }
    }

    public function add_post_like() {
        if(isset($_POST['id_post']) && !empty($_POST['id_post'])) {
            $p = new posts();
            $id_post = addslashes($_POST['id_post']);
            $uid = $_SESSION['rede_social'];
            $p->add_post_like($uid,$id_post);
        }
    }

    public function del_post_like() {
        if(isset($_POST['id_post']) && !empty($_POST['id_post'])) {
            $p = new posts();
            $id_post = addslashes($_POST['id_post']);
            $uid = $_SESSION['rede_social'];
            $p->del_post_like($uid,$id_post);
        }
    }

    public function cancel_friend() {
        if(isset($_POST['id_friend']) && !empty($_POST['id_friend'])) {
            $id_friend = addslashes($_POST['id_friend']);
            $uid = $_SESSION['rede_social'];
            $social = new relacionamentos();
            $social->add_friend($id_friend,$uid);
        }
    }
}