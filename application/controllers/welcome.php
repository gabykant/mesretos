<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
            parent::__construct();
            $this->load->model('cities_model');
        }
        
	public function index()
	{
            $options = array(
                '0' => 'Ville'
            );
            // Get the cities list
            $cities = $this->cities_model->getAllCities();
            if(!is_null($cities)) {
                foreach ($cities as $c ) {
                    $options[$c['id']] = $c['name'];
                }
            }
            $data['options'] = $options;
            $this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */