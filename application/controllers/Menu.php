<?php
class Menu extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('Menu_model');
    $this->load->library('cart');
  }

  function index(){
    $data['t_menu'] = $this->Menu_model->getMenu();
    $this->load->view('menu_view', $data);
  }

  function details(){

    $id_menu = $this->uri->segment(3);
    $data['menuDetail'] = $this->Menu_model->getMenuDetail($id_menu);

    $this->load->view('menu_detail_view', $data);
  }

  function addToCart($id_menu) {
    $this->load->model('Menu_model');
    $menu = $this->Menu_model->getSingleMenu($id_menu);
    $data = array (
        'id'    => $menu['id_menu'],
        'qty'   => 1,
        'price' => $menu['harga'],
        'name'  => $menu['nama_menu'],
        'image' => $menu['foto']
    );
    $this->cart->insert($data);
    redirect('cart/index');
  }
}

?>
