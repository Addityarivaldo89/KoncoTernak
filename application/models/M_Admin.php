<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function hitData()
    {
        $this->db->select('COUNT(produk.id_produk) as total'); 
        $this->db->join('user','user.id_user = produk.id_user');
        $this->db->join('ternak', 'ternak.id_ternak = produk.id_ternak'); 
        $this->db->group_by('id_produk');
        $query = $this->db->get('produk');
        if($query->num_rows()>0)
        {
        return $query->result();
        }else{
            return 0;
        }
    }

    public function hitUser()
    {
        $this->db->select_sum('id_ternak');
        $query = $this->db->get('ternak');
        if($query->num_rows()>0){
            return $query->num_rows();
        }
        else{
            return 0;
        }
    }

}

/* End of file M_Admin.php */

?>