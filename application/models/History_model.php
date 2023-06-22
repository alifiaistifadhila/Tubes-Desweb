<?php
class History_model extends CI_Model
{
    public function getHistory()
    {
        $this->db->select('t_order.tanggal, t_user.nama AS user_name, t_menu.nama_menu, t_order.jumlah, t_order.harga_total, t_metode_pembayaran.nama_metode');
        $this->db->from('t_order');
        $this->db->join('t_user', 't_user.id_user = t_order.id_user');
        $this->db->join('t_menu', 't_menu.id_menu = t_order.id_menu');
        $this->db->join('t_metode_pembayaran', 't_metode_pembayaran.id_metode_pembayaran = t_order.id_metode_pembayaran');
        $query = $this->db->get();

        return $query->result();
    }
}
