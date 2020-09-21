<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencairandana extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
		$this->load->library('session');
		$this->load->helper('main_helper');
    }
	public function index()
	{
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
        $data['npd'] 		        = $this->main->get_data('tbl_npd'); 
		$this->load->view('npd/index',$data);
	}
	public function add_data(){
		$id_role 				    = $this->session->userdata('id_role');
		$data['periode']        	= $this->main->get_data('tbl_periode');
        $data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$this->load->view('npd/tambah',$data);
	}
	public function save_data(){
		$data['id_periode']	    	= $this->input->post('id_periode');
        $data['tgl_npd'] 	    	= $this->input->post('tgl_npd');
        $data['judul_npd']      	= $this->input->post('judul_npd');
        $data['nosurat_npd']    	= $this->input->post('nosurat_npd');
        $data['dari_npd'] 	    	= $this->input->post('dari_npd');
        $data['kepada_npd']     	= $this->input->post('kepada_npd');
        $data['perihal_npd']    	= $this->input->post('perihal_npd');
		
		$this->main->insert_data('tbl_npd',$data);
		redirect('pencairandana/index');
	}
	public function edit_data($id_npd){
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_npd' => $id_npd];
		$data['npd'] 			    = $this->main->get_data_where('tbl_npd',$where);
		$this->load->view('npd/ubah',$data);
    }
	public function update_data(){
		$where['id_npd'] 			= $this->input->post('id_npd');
        $data['tgl_npd'] 	    	= $this->input->post('tgl_npd');
        $data['judul_npd']      	= $this->input->post('judul_npd');
        $data['nosurat_npd']    	= $this->input->post('nosurat_npd');
        $data['dari_npd'] 	    	= $this->input->post('dari_npd');
        $data['kepada_npd']     	= $this->input->post('kepada_npd');
        $data['perihal_npd']    	= $this->input->post('perihal_npd');

		$this->main->update_data('tbl_npd',$data,$where);
		redirect('pencairandana/index');
	}
    public function add_data_detail($id_npd){
        $id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where 					    = ['id_npd' => $id_npd];
		$where_join				    = ['tbl_npd_detail.id_npd' => $id_npd];
		$data['npd'] 			    = $this->main->get_data_where('tbl_npd',$where);
		$data['npd_detail']		    = $this->main->get_data_join_where('tbl_npd_detail','tbl_rekening','tbl_npd_detail.id_rekening = tbl_rekening.id_rekening',$where_join);
		$data['rekening']           = $this->main->get_data('tbl_rekening'); 
		$this->load->view('npd/detail',$data);
	}
	public function save_data_detail(){
        $data['id_npd'] 	    	= $this->input->post('id_npd');
        $data['id_rekening']    	= $this->input->post('id_rekening');
		
		$this->main->insert_data('tbl_npd_detail',$data);
		redirect('pencairandana/add_data_detail/'.$data['id_npd']);
	}
	public function delete_data_detail(){
		$data['id_npd'] 	    	= $this->input->post('id_npd');
		$where['id_npd_detail']		= $this->input->post('id_npd_detail');
		
		$this->main->delete_data('tbl_npd_detail',$where);
		redirect('pencairandana/add_data_detail/'.$data['id_npd']);
	}
	public function add_data_detail_sub($id_periode="",$id_npd_sub="",$id_rekening=""){
		
		$id_role 				    = $this->session->userdata('id_role');
		$data['menu'] 			    = $this->main->get_menu_selected($id_role); 
		$where_sub_rek				= ['tbl_sub_rek.id_rekening' => $id_rekening, 'tbl_anggaran.id_periode' => $id_periode];
		$where						= ['id_rekening' => $id_rekening];
		$data['rek_sub']           	= $this->main->get_data_join_where('tbl_sub_rek','tbl_anggaran','tbl_sub_rek.id_sub_rek = tbl_anggaran.id_sub_rek',$where_sub_rek);
		// echo'<pre>';
		// print_r($this->db->last_query());exit;
		$where_periode				= ['id_periode' => $id_periode];
		$data['periode']			= $this->main->get_data_periode('tbl_periode',$where_periode);
		
		$data['rekening']      		= $this->main->get_data_where('tbl_rekening',$where);
		$where_data					= ['id_npd_detail' => $id_npd_sub];
		$data['detail_sub']			= $this->main->get_data_where('tbl_npd_detail',$where_data);
		$where_data_join			= ['tbl_npd_detail_sub.id_npd_detail' => $id_npd_sub, 'tbl_rekening.id_rekening' => $id_rekening];
		$data['npd_detail_sub']		= $this->main->get_data_sub_detail($where_data_join);
		$data['id']					= $this->main->get_where($where_data);
		// echo '<pre>';
		// print_r($data['id']);exit;

		$this->load->view('npd/detail_sub',$data); 
	}
	public function getData($id=""){
		header('Content-Type: application/json');
		$data = $this->main->get_data_rekening($id);
        $resData = $data[0];
        echo json_encode($resData);
	}
	public function save_data_detail_sub(){
		//echo'<pre>';
		//print_r($_POST);die();
		$data['id_npd_detail']   	= $this->input->post('id_npd_detail');
		$data['id_sub_rek']    		= $this->input->post('id_sub_rek');
		$data['anggaran']    		= $this->input->post('anggaran');
		$data['realisasi_seb']    	= $this->input->post('realisasi_seb');
		$data['sisa_anggaran']    	= $this->input->post('sisa_anggaran');
		$data['panjar_ygdmt']    	= $this->input->post('panjar_ygdmt');

		$where['id_rekening']		= $this->input->post('id_rekening');
		$where['id_periode']		= $this->input->post('id_periode');  
		
		$this->main->insert_data('tbl_npd_detail_sub',$data);
		redirect('pencairandana/add_data_detail_sub/'.$where['id_periode'].'/'.$data['id_npd_detail'].'/'.$where['id_rekening']);		
	}
	public function delete_data_detail_sub(){
		$where['id_npd_detail_sub']	= $this->input->post('id_npd_detail_sub');
		$data['id_npd_detail'] 		= $this->input->post('id_npd_detail');
		$data['id_rekening'] 		= $this->input->post('id_rekening');
		$data['id_periode'] 		= $this->input->post('id_periode');
		
		$this->main->delete_data('tbl_npd_detail_sub',$where);
		// echo'<pre>';
		// print_r($this->db->last_query());exit;
		redirect('pencairandana/add_data_detail_sub/'.$data['id_periode'].'/'.$data['id_npd_detail'].'/'.$data['id_rekening']);
	}
}
