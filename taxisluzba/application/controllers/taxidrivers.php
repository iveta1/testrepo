<?php 

class Taxidrivers extends CI_Controller {

	public function display($taxidriver_id) {

		$data['taxidriver'] = $this->taxidriver_model->get_taxidriver($taxidriver_id);

		$data['main_view'] = "taxidrivers/display";

		$this->load->view('layouts/main', $data);
	}

		public function create($service_id) {

 
 $this->form_validation->set_rules('first_name', 'first_name', 'trim|required'); 
$this->form_validation->set_rules('last_name', 'last_name', 'trim|required');


if($this->form_validation->run() == FALSE){

	$data['main_view'] = 'taxidrivers/create_taxidriver';
	$this->load->view('layouts/main', $data);

	}else{

		$data = array(

			'service_id' => $service_id,
			'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		
		
			);
	

		if($this->taxidriver_model->create_taxidriver($data)){
			$this->session->set_flashdata('taxidriver_created', 'Your taxidriver has been created');
			redirect("services/index");
		}
	}
}

		public function edit($taxidriver_id) {

 
 $this->form_validation->set_rules('first_name', 'first_name', 'trim|required'); 
$this->form_validation->set_rules('last_name', 'last_name', 'trim|required');


if($this->form_validation->run() == FALSE){

	$data['service_id'] = $this->taxidriver_model->get_taxidriver_service_id($taxidriver_id);
	$data['cesta'] = $this->taxidriver_model->get_cesta($data['service_id']);
	$data['the_taxidriver'] = $this->taxidriver_model->get_taxidriver_service_data($taxidriver_id);

	$data['main_view'] = 'taxidrivers/edit_taxidriver';
	$this->load->view('layouts/main', $data);

	}else{

		$service_id = $this->taxidriver_model->get_taxidriver_service_id($taxidriver_id);

		$data = array(

			'service_id' => $service_id,
			'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),

					
			);
	

		if($this->taxidriver_model->edit_taxidriver($taxidriver_id, $data)){
			$this->session->set_flashdata('taxidriver_updated', 'Your taxidriver has been updated');
			redirect("services/index");

		}
	}
	}

	public function delete($service_id, $taxidriver_id) {

	$this->taxidriver_model->delete_taxidriver($taxidriver_id);

	$this->session->set_flashdata('taxidriver_deleted', 'Your taxidriver has been delete');
			redirect("services/display/" . $service_id . " ");  
}
}
?>