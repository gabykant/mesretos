<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Restaurants_model extends CI_Model{
    
    function getAllResto() {
        $result = array();
        $query = $this->db->get('restaurants');
        if($query->num_rows() >= 1) {
            foreach ($query->result_array() as $r) {
                $result[] = $r;
            }
        }
        return $result;
    }
    
    function getRestoByCityByTown($villeid, $quartierid) {
        $result = array();
        $this->db->select('restaurants.*, cities.name AS cityname, towns.name AS townname');
//        $this->db->from('restaurants');
        $this->db->join('cities', 'cities.id = restaurants.cities_id');
        $this->db->join('towns', 'towns.id = restaurants.towns_id');
        $query = $this->db->get_where('restaurants', 
                array(
                    'cities_id' => $villeid,
                    'towns_id'  => $quartierid
                )
            );
        if($query->num_rows() >= 1) {
            foreach ($query->result_array() as $r) {
                $result[] = $r;
            }
        }
        return $result;
    }
    
    function getRestoNameById($id) {
        $query = $this->db->get_where("restaurants", array("id" => $id));
        if($query->num_rows()) {
            foreach ($query->result() as $r){
                return $r->name;
            }
        }
        return NULL;
    }
}
?>
