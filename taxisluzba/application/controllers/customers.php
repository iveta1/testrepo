<?php 

class Customers extends CI_Controller {

	public function display($customer_id) {

		$data['customer'] = $this->customer_model->get_customer($customer_id);

		$data['main_view'] = "customers/display";

		$this->load->view('layouts/main', $data);
	}

		public function create($service_id) {

 
 $this->form_validation->set_rules('first_name', 'first_name', 'trim|required'); 
$this->form_validation->set_rules('last_name', 'last_name', 'trim|required');


if($this->form_validation->run() == FALSE){

	$data['main_view'] = 'customers/create_customer';
	$this->load->view('layouts/main', $data);

	}else{

		$data = array(

			'service_id' => $service_id,
			'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),

					
			);	

		if($this->customer_model->create_customer($data)){
			$this->session->set_flashdata('customer_created', 'Your customer has been created');
			redirect("services/index");
		}
	}
}
		public function edit($customer_id) {
 
 $this->form_validation->set_rules('first_name', 'first_name', 'trim|required'); 
$this->form_validation->set_rules('last_name', 'last_name', 'trim|required');

if($this->form_validation->run() == FALSE){

	$data['service_id'] = $this->customer_model->get_customer_service_id($customer_id);
	$data['the_customer'] = $this->customer_model->get_customer_service_data($customer_id);

	$data['main_view'] = 'customers/edit_customer';
	$this->load->view('layouts/main', $data);

	}else{

		$service_id = $this->customer_model->get_customer_service_id($customer_id);

		$data = array(

			'service_id' => $service_id,
			'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name')			
			);
	
		if($this->customer_model->edit_customer($customer_id, $data)){
			$this->session->set_flashdata('customer_updated', 'Your customer has been updated');
			redirect("services/index");

		}
	}
	}

	public function delete($service_id, $customer_id) {

	$this->customer_model->delete_customer($customer_id);

	$this->session->set_flashdata('customer_deleted', 'Your customer has been delete');
			redirect("services/display/" . $service_id . " "); 
}
}
?>