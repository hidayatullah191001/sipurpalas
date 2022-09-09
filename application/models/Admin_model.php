<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $name;
    public $email;
    public $role_id;
    public $is_active;


    public function getById($id_user) {
        return $this->db->get_where($this->_table, ["id" => $id_user])->row();
    }

    public function countUser(){
        return $this->db->get($this->_table)->num_rows();
    }

    public function countUserAktif(){
        return $this->db->get_where($this->_table, ['is_active' => 1] )->num_rows();
    }

    public function countUserTidakAktif(){
        return $this->db->get_where($this->_table, ['is_active'  => 0])->num_rows();
    }

    public function update_user() {
        $post = $this->input->post();

        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->role_id = $post["role_id"];
        if(isset($_POST['is_active']) )
        {
            $this->is_active = $post["is_active"];
        }
        else
        {
            $this->is_active = 0;
        }

        $this->db->update($this->_table, $this, array('id' => $post['id']));

    }

    public function delete($id_user)
    {
        return $this->db->delete($this->_table, array("id" => $id_user));
    }

    /*Untuk admin*/
    public function total()
    {   

        $id_role = 1;

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id !=', $id_role);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
          return $query->num_rows();
      }
      else
      {
          return 0;
      }
  }


}
