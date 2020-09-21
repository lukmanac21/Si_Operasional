<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['rekening'] 		    = $this->main->get_data('tbl_rekening'); 
		$this->load->view('rekening/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('rekening/tambah',$data);
	}
	public function save_data(){
        $data['kode_rekening'] 	    = $this->input->post('kode_rekening');
        $data['uraian_rekening']    = $this->input->post('uraian_rekening');
		
		$this->main->insert_data('tbl_rekening',$data);
		redirect('Rekening/index');
	}
	public function edit_data($id_rekening){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_rekening' => $id_rekening];
		$data['rekening'] 			    = $this->main->get_data_where('tbl_rekening',$where);
		$this->load->view('rekening/ubah',$data);
	}
	public function update_data(){
		$where['id_rekening'] 		= $this->input->post('id_rekening');
        $data['kode_rekening'] 	    = $this->input->post('kode_rekening');
        $data['uraian_rekening']    = $this->input->post('uraian_rekening');

		$this->main->update_data('tbl_rekening',$data,$where);
		redirect('Rekening/index');
	}
	public function delete_data(){
		$where['id_rekening'] 		= $this->input->post('id_rekening');
		
		$this->main->delete_data('tbl_rekening',$where);
		redirect('Rekening/index');
	}
}
