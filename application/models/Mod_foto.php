<?php
class Mod_foto extends CI_Model {

    public function getList()
    {
        $query = $this->db->query("select * from tbl_foto");
        return $query->result();
    }

    public function detail($id)
    {
        $query = $this->db->query("select * from tbl_foto where id = '$id'");
        return $query->result();
    }

  }
