<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function fetch_data($limit, $start, $search)
    {
        $this->db->select('*');
        $this->db->from('produk');
        if ($search != '') {
            $this->db->like('nama', $search);
        }
        $this->db->limit($limit, $start);
        $this->db->order_by('id', 'ASC');
        return $this->db->get();
    }
}
