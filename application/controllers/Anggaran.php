<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggaran extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$data['anggaran']       = $this->main->get_data_three('tbl_anggaran','tbl_periode','tbl_anggaran.id_periode = tbl_periode.id_periode','tbl_sub_rek','tbl_anggaran.id_sub_rek = tbl_sub_rek.id_sub_rek','tbl_rekening','tbl_sub_rek.id_rekening = tbl_rekening.id_rekening');

		$this->load->view('anggaran/index',$data);
	}
	public function add_data(){
		$id_role 				= $this->session->userdata('id_role');
        $data['menu'] 			= $this->main->get_menu_selected($id_role);
        $data['periode']        = $this->main->get_data('tbl_periode');
        $data['sub_rek']        = $this->main->get_data_join('tbl_sub_rek','tbl_rekening','tbl_sub_rek.id_rekening = tbl_rekening.id_rekening'); 

		$this->load->view('anggaran/tambah',$data);
	}
	public function save_data(){
        $data['id_periode'] 	= $this->input->post('id_periode');
        $data['id_sub_rek'] 	= $this->input->post('id_sub_rek');
		$data['anggaran']       = $this->input->post('anggaran');


		$this->main->insert_data('tbl_anggaran',$data);
		redirect('anggaran/index');
	}
	public function edit_data($id_anggaran){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$where 					= ['id_anggaran' => $id_anggaran];
		$data['anggaran'] 	    = $this->main->get_data_where('tbl_anggaran',$where);
        $data['periode']        = $this->main->get_data('tbl_periode');
		$data['sub_rek']        = $this->main->get_data_join('tbl_sub_rek','tbl_rekening','tbl_sub_rek.id_rekening = tbl_rekening.id_rekening');
		// echo '<prev>';
		// print_r($this->db->last_query());exit;

		$this->load->view('anggaran/ubah',$data);
	}
	public function update_data(){
		$id_anggaran 			= $this->input->post('id_anggaran');
		$where					= ['id_anggaran' => $id_anggaran];
		$data['id_periode'] 	= $this->input->post('id_periode');
        $data['id_sub_rek'] 	= $this->input->post('id_sub_rek');
		$data['anggaran']       = $this->input->post('anggaran');

		$this->main->update_data('tbl_anggaran',$data,$where);
		// echo '<prev>';
		// print_r($this->db->last_query());exit;
		
		redirect('anggaran/index');
	}
	public function delete_data(){
		$where['id_sub_rek'] 	= $this->input->post('id_sub_rek');
		
		$this->main->delete_data('tbl_anggaran',$where);
		redirect('anggaran/index');
	}
}
