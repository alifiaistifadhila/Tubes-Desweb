<?php
class Menu_model extends CI_Model{

  function getMenu(){
    $result = $this->db->get('t_menu')->result();
    return $result;
  }

  function getMenuDetail($id_menu){

    $this->db->select('*');
    $this->db->from('t_menu');
    $this->db->where('id_menu', $id_menu);
    $query = $this->db->get();

    return $query->row();

  }

  public function getSingleMenu($id_menu) {
    $this->db->where('id_menu', $id_menu);
    $menu = $this->db->get('t_menu')->row_array();
    return $menu;
}

  function addMenu($data){

    $this->db->insert('t_menu', $data);

  }

  function updateMenu($id_menu, $data){

    $this->db->where('id_menu', $id_menu);
    $this->db->update('t_menu', $data);

  }

  function delete($id_menu){

    $this->db->where('id_menu', $id_menu);
    $this->db->delete('t_menu');
  }
   
}