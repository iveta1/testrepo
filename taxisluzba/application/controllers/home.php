<?php  
class Home extends CI_Controller {

	public function index() {

		if($this->session->userdata('logged_in')){

			$user_id = $this->session->userdata('user_id');

			$data['customers'] = $this->customer_model->get_all_customers($user_id);  
   $data['cars'] = $this->car_model->get_all_cars($user_id);  

$data['taxidrivers'] = $this->taxidriver_model->get_all_taxidrivers($user_id);  

			$data['services'] = $this->service_model->get_all_services($user_id);
		}

		$data['main_view'] = "home_view";
		$this->load->view('layouts/main', $data);
	}
}

?>