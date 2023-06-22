<?php

class Cart extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('cart');
        $this->load->library('session');
        $this->load->model('Menu_model');
        $this->load->model('Cart_model');
    }

    function index() {
        // Load the cart view
        $data['cartItems'] = $this->cart->contents();
        $this->load->view('cart_view', $data);
    }

    function removeItem($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);

        $this->session->set_flashdata('item_deleted', 'Item menu berhasil dihapus.');
        redirect('cart');
    }

    function clearCart() {
        // Clear all items from the cart
        $this->cart->destroy();

        // Redirect back to the cart page
        redirect(base_url() . 'cart/index');
    }

    // Update cart item quantity
    function updateCartItem() {
        // Retrieve input data
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');

        // Validate input data
        if (!empty($rowid) && is_numeric($qty)) {
            // Update cart item quantity
            $data = array(
                'rowid' => $rowid,
                'qty' => $qty
            );
            $this->cart->update($data);

            // Get updated cart data
            $cartData = $this->cart_model->getCartData();

            // Prepare response data
            $subtotal = $cartData['subtotal'];
            $total = $cartData['total'];

            // Return response as JSON
            $response = array(
                'subtotal' => $subtotal,
                'total' => $total
            );
            echo json_encode($response);
        }
    }

    // Endpoint untuk mendapatkan total harga saat ini dari keranjang
    public function getTotal()
    {
        $total = $this->cart->total();
        $response = array('success' => true, 'total' => $total);
        echo json_encode($response);
    }

}

?>