<?php

class pages extends model {

    public function get_all_pages() {
        $array = array();

        $sql = "SELECT * FROM paginas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function get_page_info($id_page) {
        $array = array();

        $sql = "SELECT * FROM paginas WHERE id = '$id_page'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function get_my_pages($uid) {
        $array = array();
        
        $sql = "SELECT * FROM paginas WHERE id_adm = '$uid'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function new_page($uid,$page_title) {
        $sql = "INSERT INTO paginas SET pagina_titulo = '$page_title', id_adm = '$uid'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0) {
            header("Location: ".BASE_URL.'pages');
        }
    }

}