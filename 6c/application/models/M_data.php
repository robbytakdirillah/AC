<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class M_data extends CI_Model {

     public function __construct()
     {
          parent::__construct();
     }

     public function semua()
     {
          $this->db->select('name.id, name.name, work.name as work, category.salary');
		  $this->db->from('name');
		  $this->db->join('work','work.id=name.id_work');
		  $this->db->join('category','category.id=name.id_salary');
		//   $this->db->where($aktif);
		  $query = $this->db->get();

          return $query->result();
	 }

	 public function list_work()
	 {
		 $this->db->select('*');
		 $this->db->from('work');
		 $query = $this->db->get();

		 return $query->result();
	 }

	 public function list_salary()
	 {
		 $this->db->select('*');
		 $this->db->from('category');
		 $query = $this->db->get();

		 return $query->result();
	 }

	 public function save($data)
	 {
		return $this->db->insert('name', $data);
	 }

	 public function update($id, $data)
	 {
		 $this->db->where('id', $id);
		return $this->db->update('name', $data);
	 }

	 public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('name');
	 }


	}