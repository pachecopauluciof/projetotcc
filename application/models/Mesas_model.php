<?php

class Mesas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	public function getMesas(){
		$this->db->from('mesa');

		 return $this->db->get()->result_array();
	}

	public function insert($data){
		$this->db->insert("mesa",$data);
	}

	public function update($id_mesa, $data){
		$this->db->where("idmesa",$id_mesa);
        $this->db->update("mesa", $data);
	}

	public function delete($id_mesa){
		$this->db->where("idmesa",$id_mesa);
        $this->db->delete("mesa");
	}
}