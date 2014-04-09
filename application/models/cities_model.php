<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cities_model extends CI_Model{
    
    // We retrieve the cities from the database
    function getAllCities() {
        $result = array();
        $query = $this->db->get('cities');
        if($query->num_rows() >= 1) {
            foreach ($query->result_array() as $r) {
                $result[] = $r;
            }
        }
        return $result;
    }
    
    function getCityById($id) {
        $query = $this->db->get_where('cities', array("id" => $id));
        if($query->num_rows()) {
            foreach ($query->result() as $r){
                return $r->name;
            }
        }
        return NULL;
    }
}
?>
