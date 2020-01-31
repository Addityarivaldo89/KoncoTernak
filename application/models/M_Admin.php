<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function hitTransaksi()
    {
        $this->db->select_sum('id_transaksi');
        $query = $this->db->get('transaksi');
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