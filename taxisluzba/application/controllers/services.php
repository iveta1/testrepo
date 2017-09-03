
<?php
class Services extends CI_Controller{

	public function __construct(){

		parent::__construct();

		if(!$this->session->userdata('logged_in')){
		$this->session->set_flashdata('no_access', 'Sorry you are allowed or NOT logged in ');

		redirect('home/index');

	}
	}

	public function index() {

		$data['services'] = $this->service_model->get_services();


		$data['main_view'] = "services/index";

		$this->load->view('layouts/main', $data);
	}

	public function display($service_id) {  //status

$data['completed_customers'] = $this->service_model->get_service_customers($service_id, true);

$data['completed_cars'] = $this->service_model->get_service_cars($service_id, true);


$data['completed_taxidrivers'] = $this->service_model->get_service_taxidrivers($service_id, true);  //status

		$data['service_data'] = $this->service_model->get_service($service_id);

		$data['main_view'] = "services/display";

		$this->load->view('layouts/main', $data);

	}

	public function create(){

$this->form_validation->set_rules('datum','datum', 'trim|required');
$this->form_validation->set_rules('cesta', 'cesta', 'trim|required');
$this->form_validation->set_rules('cena', 'cena', 'trim|required');
$this->form_validation->set_rules('sluzba', 'sluzba', 'trim|required');  


if($this->form_validation->run() == FALSE){

	$data['main_view'] = 'services/create_service';
	$this->load->view('layouts/main', $data);

	}else{

		$data = array(

			'datum' => $this->input->post('datum'),
			'cesta' => $this->input->post('cesta'),
			'cena' => $this->input->post('cena'),
			'sluzba' => $this->input->post('sluzba') 
			
			);
	
		if($this->service_model->create_service($data)){
			$this->session->set_flashdata('service_created', 'Your Service has been created');
			redirect("services/index");

		}
	}
}

	public function edit($service_id){

$this->form_validation->set_rules('datum','datum', 'trim|required');
$this->form_validation->set_rules('cesta', 'cesta', 'trim|required');
$this->form_validation->set_rules('cena', 'cena', 'trim|required');
$this->form_validation->set_rules('sluzba', 'sluzba', 'trim|required');  

if($this->form_validation->run() == FALSE){

	$data['service_data'] = $this->service_model->get_services_info($service_id);


	$data['main_view'] = 'services/edit_service';
	$this->load->view('layouts/main', $data);

	}else{

		$data = array(

			'datum' => $this->input->post('datum'),
			'cesta' => $this->input->post('cesta'),
			'cena' => $this->input->post('cena'),
			'sluzba' => $this->input->post('sluzba') 
			
			);
	
		if($this->service_model->edit_service($service_id, $data)){
			$this->session->set_flashdata('service_updated', 'Your Service has been updated');
			redirect("services/index");

		}
	}
}

public function delete($service_id){

	$this->service_model->delete_service_taxidrivers($service_id); 

	$this->service_model->delete_service($service_id);

	$this->session->set_flashdata('service_deleted', 'Your Service has been delete');
	redirect("services/index");

}

}
?>