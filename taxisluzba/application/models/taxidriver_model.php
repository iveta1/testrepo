<?php 

class Taxidriver_model extends CI_Model {

public function get_taxidriver($taxidriver_id) {

	$this->db->where('id', $taxidriver_id);
	$query = $this->db->get('taxidrivers');

	return $query->row();
}


public function get_all_taxidrivers( $user_id) {   

$this->db->join('taxidrivers', 'services.id = taxidrivers.service_id');
$query = $this->db->get('services');
return $query->result();


}

public function create_taxidriver($data) {

	$query = $this->db->insert('taxidrivers', $data);
	return $query;
}

public function get_taxidriver_service_id($taxidriver_id) {

	$this->db->where('id', $taxidriver_id);

	$query = $this->db->get('taxidrivers');
	return $query->row()->service_id;  

}

	public function get_cesta($service_id) {
		$this->db->where('id', $service_id);
		$query = $this->db->get('services');
		return $query->row()->cesta;
	}

public function get_taxidriver_service_data($taxidriver_id) {

	$this->db->where('id', $taxidriver_id);

	$query = $this->db->get('taxidrivers');
	return $query->row();


}

public function edit_taxidriver($taxidriver_id, $data) {

	$this->db->where('id', $taxidriver_id);

	$this->db->update('taxidrivers', $data);
	return TRUE;


}

public function delete_taxidriver($taxidriver_id) {

	$this->db->where('id', $taxidriver_id);
	$this->db->delete('taxidrivers');


}

}

?>