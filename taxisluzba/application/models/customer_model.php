<?php 

class Customer_model extends CI_Model {

public function get_customer($customer_id) {

	$this->db->where('id', $customer_id);
	$query = $this->db->get('customers');

	return $query->row();
}


public function get_all_customers( $user_id) {   
	
$this->db->join('customers', 'services.id = customers.service_id');
$query = $this->db->get('services');
return $query->result();
}

public function create_customer($data) {

	$query = $this->db->insert('customers', $data);
	return $query;
}
public function get_customer_service_id($customer_id) {

	$this->db->where('id', $customer_id);

	$query = $this->db->get('customers');
	return $query->row()->service_id;  

}

	public function get_cesta($service_id) {
		$this->db->where('id', $service_id);
		$query = $this->db->get('services');
	
	}

public function get_customer_service_data($customer_id) {

	$this->db->where('id', $customer_id);

	$query = $this->db->get('customers');
	return $query->row();


}

public function edit_customer($customer_id, $data) {

	$this->db->where('id', $customer_id);

	$this->db->update('customers', $data);
	return TRUE;

}

public function delete_customer($customer_id) {

	$this->db->where('id', $customer_id);
	$this->db->delete('customers');


}
}

?>