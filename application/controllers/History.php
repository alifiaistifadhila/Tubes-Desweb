<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('History_model');
    }

    public function index()
    {
        $data['order_history'] = $this->History_model->getHistory();
        $this->load->view('history_view', $data);
    }
}
