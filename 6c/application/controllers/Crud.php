<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

     public function __construct()
     {
          parent::__construct();

          $this->load->model('m_data');
     }

     public function index() 
     {
          $data['all_name'] = $this->m_data->semua();
          $data['all_work'] = $this->m_data->list_work();
          $data['all_salary'] = $this->m_data->list_salary();

          $this->load->view('home/index', $data);
     }

     public function simpan()
     {
         $data = array(
             'name' => $this->input->post('nama'),
             'id_work' => $this->input->post('work'),
             'id_salary' => $this->input->post('salary')
         );
         $this->m_data->save($data);
         return redirect('Crud');
     }

     public function edit($id)
     {
        $this->db->select('name.id, name.name, work.name as work, category.salary');
        $this->db->from('name');
        $this->db->join('work','work.id=name.id_work');
        $this->db->join('category','category.id=name.id_salary');
        $this->db->where('name.id', $id);
        $query = $this->db->get();

        $data['name'] = $query->result();
          $data['id'] = $id;
           // echo json_encode($data['name']);
          $this->load->view('home/edit', $data);
     }

     public function ubah($id)
     {
         $data = array(
             'name' => $this->input->post('nama'),
             'id_work' => $this->input->post('work'),
             'id_salary' => $this->input->post('salary')
         );
         $this->m_data->update($id,  $data);
         return redirect('Crud');
     }

     public function destroy($id)
     {
         $this->m_data->delete($id);
         return redirect('Crud');
     }
     
}