<?php 

class Car_model extends CI_Model {

public function get_car($car_id) {

	$this->db->where('id', $car_id);
	$query = $this->db->get('cars');

	return $query->row();
}



public function get_all_cars( $user_id) {   

$this->db->join('cars', 'services.id = cars.service_id');
$query = $this->db->get('services');
return $query->result();
}
public function create_car($data) {

	$query = $this->db->insert('cars', $data);
	return $query;
}
public function get_car_service_id($car_id) {

	$this->db->where('id', $car_id);

	$query = $this->db->get('cars');
	return $query->row()->service_id;  

}

	public function get_cesta($service_id) {
		$this->db->where('id', $service_id);
		$query = $this->db->get('services');

	}

public function get_car_service_data($car_id) {

	$this->db->where('id', $car_id);

	$query = $this->db->get('cars');
	return $query->row();


}

public function edit_car($car_id, $data) {

	$this->db->where('id', $car_id);

	$this->db->update('cars', $data);
	return TRUE;

}

public function delete_car($car_id) {

	$this->db->where('id', $car_id);
	$this->db->delete('cars');


}
}

?>