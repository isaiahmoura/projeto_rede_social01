<?php

class relacionamentos extends model {

    public function add_friend($id_friend,$uid) {
        $sql = "INSERT INTO relacionamentos 
        SET usuario_de = '$uid', usuario_para = '$id_friend', status_friend = '1'";
        $sql = $this->db->query($sql);
    }

    public function cancel_friend($id_friend,$uid) {
        $sql = "DELETE FROM relacionamentos 
        WHERE usuario_de = '$uid' AND usuario_para = '$id_friend' AND status_friend = '1'";
        $sql = $this->db->query($sql);
    }
}