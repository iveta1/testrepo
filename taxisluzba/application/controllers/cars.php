<?php 

class cars extends CI_Controller {

	public function display($car_id) {

		$data['car'] = $this->car_model->get_car($car_id);

		$data['main_view'] = "cars/display";

		$this->load->view('layouts/main', $data);
	}

		public function create($service_id) {
 
 $this->form_validation->set_rules('ec', 'ec', 'trim|required'); 
$this->form_validation->set_rules('typ', 'typ', 'trim|required');

if($this->form_validation->run() == FALSE){

	$data['main_view'] = 'cars/create_car';
	$this->load->view('layouts/main', $data);

	}else{

		$data = array(

			'service_id' => $service_id,
			'ec' => $this->input->post('ec'),
		'typ' => $this->input->post('typ')
						
			);	

		if($this->car_model->create_car($data)){
			$this->session->set_flashdata('car_created', 'Your car has been created');
			redirect("services/index");

		}
	}
}
		public function edit($car_id) {
 
 $this->form_validation->set_rules('ec', 'ec', 'trim|required'); 
$this->form_validation->set_rules('typ', 'typ', 'trim|required');

if($this->form_validation->run() == FALSE){

	$data['service_id'] = $this->car_model->get_car_service_id($car_id);
	$data['the_car'] = $this->car_model->get_car_service_data($car_id);

	$data['main_view'] = 'cars/edit_car';
	$this->load->view('layouts/main', $data);

	}else{

		$service_id = $this->car_model->get_car_service_id($car_id);

		$data = array(

			'service_id' => $service_id,
			'ec' => $this->input->post('ec'),
		'typ' => $this->input->post('typ')
			
			);	

		if($this->car_model->edit_car($car_id, $data)){
			$this->session->set_flashdata('car_updated', 'Your car has been updated');
			redirect("services/index");

		}
	}	
	}

	public function delete($service_id, $car_id) {
	$this->car_model->delete_car($car_id);
	$this->session->set_flashdata('car_deleted', 'Your car has been delete');
			redirect("services/display/" . $service_id . " ");  
}
}
?>