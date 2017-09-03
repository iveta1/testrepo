<?php 
class Service_model extends CI_Model {

	public function get_service($id) {

		$this->db->where('id', $id);

		$query = $this->db->get('services');
		
		return $query->row();
	}

	public function get_services() {

		$query = $this->db->get('services');

		return $query->result();
	}


	public function get_all_services($user_id) {

			$query = $this->db->get('services');

			return $query->result();


	}


	public function create_service($data){

		$insert_query = $this->db->insert('services', $data);

		return $insert_query;


	}

	public function edit_service($service_id, $data) {
		$this->db->where('id', $service_id);
		$this->db->update('services', $data);

		return true;


	}


	public function delete_service($service_id) {

		$this->db->where('id', $service_id);
		$this->db->delete('services');
	}

	public function get_services_info($service_id) {
		$this->db->where('id', $service_id);
		$get_data = $this->db->get('services');
		return $get_data->row();

	}
	public function get_service_taxidrivers($service_id, $active = true) {   

		$this->db->select('

				taxidrivers.first_name,
	      		taxidrivers.last_name,
				taxidrivers.id as taxidrive_id, 

				services.datum,
				services.sluzba
			
			');

		$this->db->from('taxidrivers');  
		$this->db->join('services', 'services.id = taxidrivers.service_id');
		$this->db->where('taxidrivers.service_id', $service_id);

		if($active == true) {  

			$this->db->where('taxidrivers.status', 0);
		}else {
				$this->db->where('taxidrivers.status', 1);  

		}
		$query = $this->db->get();

		if($query->num_rows() < 1) {  

			return FALSE;
		}

			return $query->result();
	}

	public function delete_service_taxidrivers($service_id) {  

	$this->db->where('service_id', $service_id);
	$this->db->delete('taxidrivers');
	return $query;
}




public function get_service_customers($service_id, $active = true) {   

		$this->db->select('

				customers.first_name,
	      		customers.last_name,
				customers.id as customer_id, 

				services.datum,
				services.sluzba
			
			');

		$this->db->from('customers');  
		$this->db->join('services', 'services.id = customers.service_id');
		$this->db->where('customers.service_id', $service_id);

		if($active == true) {  //status

			$this->db->where('customers.status', 0);
		}else {
				$this->db->where('customers.status', 1);  

		}
		$query = $this->db->get();

		if($query->num_rows() < 1) {  

			return FALSE;
		}

			return $query->result();
	}

	public function delete_service_customers($service_id) {  

	$this->db->where('service_id', $service_id);
	$this->db->delete('customers');
	return $query;

}

public function get_service_cars($service_id, $active = true) {   

		$this->db->select('

				cars.ec,
	      		cars.typ,
				cars.id as car_id, 

				services.datum,
				services.sluzba
			
			');

		$this->db->from('cars');  
		$this->db->join('services', 'services.id = cars.service_id');
		$this->db->where('cars.service_id', $service_id);

		if($active == true) {  

			$this->db->where('cars.status', 0);
		}else {
				$this->db->where('cars.status', 1);  

		}
		$query = $this->db->get();

		if($query->num_rows() < 1) {  

			return FALSE;
		}

			return $query->result();
	}

	public function delete_service_cars($service_id) {  

	$this->db->where('service_id', $service_id);
	$this->db->delete('cars');
	return $query;

}

}
?>