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
    
    function getTownById($id) {
        $query = $this->db->get_where('towns', array("id" => $id));
        if($query->num_rows()) 
            foreach ($query->result() as $r){
                return $r->name;
            }
    }
}
?>
