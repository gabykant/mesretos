<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Towns_model extends CI_Model{
    
    // We retrieve the cities from the database
    function getAllTowns($id) {
        $result = array();
        $this->db->where(array('citiesid'=>$id));
        $this->db->order_by("name", "asc");
        $query = $this->db->get('towns');
        if($query->num_rows() >= 1) {
            foreach ($query->result_array() as $r) {
                $result[] = $r;
            }
        }
        return $result;
    }
}
?>
