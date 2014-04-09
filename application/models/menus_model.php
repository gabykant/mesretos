<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menus_model extends CI_Model{
    
    function getMenuByRestoId($id) {
        $result = array();
        $query = $this->db->get_where("menus",
                array("restaurants_id" => $id));
        if($query->num_rows() >=1) {
            foreach($query->result_array() as $r) 
                $result[] = $r;
        }
        return $result;
    }
}
?>
