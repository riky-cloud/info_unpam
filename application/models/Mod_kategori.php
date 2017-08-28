<?php
class Mod_kategori extends CI_Model {

    public function getList()
    {
        $query = $this->db->query("select * from tbl_kategori where deleted = '0'");
        return $query->result();
    }

    public function detail($id)
    {
        $query = $this->db->query("select * from tbl_kategori where id = '$id'");
        return $query->result();
    }

  }
