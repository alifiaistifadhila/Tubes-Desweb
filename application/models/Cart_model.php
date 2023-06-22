<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function getCartData() {
        $cartData = array(
            'subtotal' => 0,
            'total' => 0
        );

        // Calculate subtotal and total
        foreach ($this->cart->contents() as $item) {
            $subtotal = $item['subtotal'];
            $cartData['subtotal'] += $subtotal;
        }

        $cartData['total'] = $cartData['subtotal'];

        return $cartData;
    }

    public function getItems() {
        return $this->cart->contents();
    }

}