<?php
class Mod_artikel extends CI_Model {

    public function getList($id)
    {
        $query = $this->db->query("SELECT a.`id`, a.`judul`, a.`isi`, a.`created_date`, a.`updated`, k.`nama` kategori, f.`file_name` foto FROM tbl_artikel a
        LEFT JOIN tbl_kategori k
        ON a.`id_kategori` = k.`id`
        LEFT JOIN tbl_foto f
        ON f.`id` = a.`id_foto`
        WHERE a.`id_user` = '1' AND a.`deleted` = '0'
        ");
        return $query->result();
    }

    public function detail($id)
    {
        $query = $this->db->query("SELECT a.`id`, a.`judul`, a.`isi`, a.`created_date`, a.`updated`, k.`nama` kategori, f.`file_name` foto FROM tbl_artikel a
            LEFT JOIN tbl_kategori k
            ON a.`id_kategori` = k.`id`
            LEFT JOIN tbl_foto f
            ON f.`id` = a.`id_foto`
            WHERE a.`id` = '$id' AND a.`deleted` = '0'
        ");
        return $query->result();
    }

    public function update_entry()
    {
      $this->title    = $_POST['title'];
      $this->content  = $_POST['content'];
      $this->date     = time();

      $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

  }
