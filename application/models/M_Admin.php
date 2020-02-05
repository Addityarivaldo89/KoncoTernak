<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    public function tampil_data()
    {
        return $this->db->get('user');
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

    public function input_data($data,$table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {		
        return $this->db->get_where($table,$where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}

/* End of file M_Admin.php */

?>