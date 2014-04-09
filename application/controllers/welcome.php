<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
            parent::__construct();
            $this->load->model('cities_model');
            $this->load->model('towns_model');
            $this->load->model('restaurants_model');
            $this->load->model('menus_model');
            $this->load->library('session');
        }
        
	public function index()
	{
            if($_POST) {
                $ville = $_POST['cities'];
                $quartier = $_POST['town'];
                $quand = $_POST['quand'];
                if($ville != 0 && $quartier != 0) {
                    $this->session->set_userdata("ville", $ville);
                    $this->session->set_userdata("quartier", $quartier);
                    $this->session->set_userdata("quand", $quand);
                    redirect ('welcome/restaurant');
                }
            }
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
        
        public function restaurant() {
            $ville_id = $this->session->userdata("ville");
            $quartier_id = $this->session->userdata("quartier");
            $quand = $this->session->userdata("quand");
            $ville_name = $this->cities_model->getCityById($ville_id);
            $quartier_name = $this->towns_model->getTownById($quartier_id);
            
            $restaurants = $this->restaurants_model->getRestoByCityByTown($ville_id, $quartier_id);
            $data['restaurants'] = $restaurants;
            $data['city'] = $ville_name;
            $data['town'] = $quartier_name;
            $this->load->view('public/restaurant_list', $data);
        }
        
        public function menuresto($id) {
            $ville_id = $this->session->userdata("ville");
            $quartier_id = $this->session->userdata("quartier");
            $ville_name = $this->cities_model->getCityById($ville_id);
            $quartier_name = $this->towns_model->getTownById($quartier_id);
            
            $restomenu = $this->menus_model->getMenuByRestoId($id);
            $data['resto'] = $this->restaurants_model->getRestoNameById($id);
            $data['menus'] = $restomenu;
            $data['city'] = $ville_name;
            $data['town'] = $quartier_name;
            $this->load->view('public/menu', $data);
        }
        
        public function register() {
            $this->load->view("public/account");
        }
        
        public function login() {
            $this->load->view("public/login");
        }
        
        public function gettowncities() {
            $townlist = $this->towns_model->getAllTowns($_POST['id']);
            $townarray = array();
            foreach ($townlist as $key => $value) {
                $townarray[$value['id']] = $value['name'];
            }
            echo json_encode($townarray);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */