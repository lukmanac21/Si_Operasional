<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
    public function index()
    {
        $id_role                     = $this->session->userdata('id_role');
        $data['menu']                 = $this->main->get_menu_selected($id_role);
        $data['barang']             = $this->main->get_data_two('tbl_barang', 'tbl_jenis', 'tbl_barang.id_jenis=tbl_jenis.id_jenis', 'tbl_kegiatan', 'tbl_barang.id_kegiatan=tbl_kegiatan.id_kegiatan');
        $this->load->view('barang/index', $data);
    }
    public function add_data()
    {
        $id_role                     = $this->session->userdata('id_role');
        $data['menu']                 = $this->main->get_menu_selected($id_role);
        $this->load->view('barang/tambah', $data);
    }
    public function save_data()
    {
        $data['id_jenis']                   = $this->input->post('id_jenis');
        $data['nama_barang']                = $this->input->post('nama_barang');
        $data['id_kegiatan']                = $this->input->post('id_kegiatan');
        $data['id_satuan']                  = $this->input->post('id_satuan');
        $data['tgl_barang']                 = $this->input->post('tgl_barang');
        $data['model_barang']               = $this->input->post('model_barang');
        $data['fcc_barang']                 = $this->input->post('fcc_barang');
        $data['upc_barang']                 = $this->input->post('upc_barang');
        $data['hwversi_barang']             = $this->input->post('hwversi_barang');
        $data['cmiit_barang']               = $this->input->post('cmiit_barang');
        $data['kg_barang']                  = $this->input->post('kg_barang');
        $data['produk_barang']              = $this->input->post('produk_barang');
        $data['tipe_barang']                = $this->input->post('tipe_barang');
        $data['plug_barang']                = $this->input->post('plug_barang');
        $data['power_barang']               = $this->input->post('power_barang');
        $data['frek_barang']                = $this->input->post('frek_barang');
        $data['mac_barang']                 = $this->input->post('mac_barang');
        $data['seri_barang']                = $this->input->post('seri_barang');
        $data['stok_barang']                = $this->input->post('stok_barang');
        $data['harga_barang']               = $this->input->post('harga_barang');
        $images = "";
        $upload = $this->main->upload_file_barang();
        if ($upload['result'] == "success") { // Jika proses upload sukses
            $images = $upload['file']['file_name'];
        } else { // Jika proses upload gagal
            $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
        }

        $data['img_barang'] = $images ? $images : '';

        $this->main->insert_data('tbl_barang', $data);
        redirect('barang/index');
    }
    public function edit_data($id_barang)
    {
        $id_role                             = $this->session->userdata('id_role');
        $data['menu']                         = $this->main->get_menu_selected($id_role);
        $where                                 = ['id_barang' => $id_barang];
        $data['barang']                     = $this->main->get_data_where('tbl_barang', $where);
        $this->load->view('barang/ubah', $data);
    }
    public function update_data()
    {
        $where['id_barang']                 = $this->input->post('id_barang');
        $data['id_jenis']                   = $this->input->post('id_jenis');
        $data['nama_barang']                = $this->input->post('nama_barang');
        $data['id_kegiatan']                = $this->input->post('id_kegiatan');
        $data['id_satuan']                  = $this->input->post('id_satuan');
        $data['tgl_barang']                 = $this->input->post('tgl_barang');
        $data['model_barang']               = $this->input->post('model_barang');
        $data['fcc_barang']                 = $this->input->post('fcc_barang');
        $data['upc_barang']                 = $this->input->post('upc_barang');
        $data['hwversi_barang']             = $this->input->post('hwversi_barang');
        $data['cmiit_barang']               = $this->input->post('cmiit_barang');
        $data['kg_barang']                  = $this->input->post('kg_barang');
        $data['produk_barang']              = $this->input->post('produk_barang');
        $data['tipe_barang']                = $this->input->post('tipe_barang');
        $data['plug_barang']                = $this->input->post('plug_barang');
        $data['power_barang']               = $this->input->post('power_barang');
        $data['frek_barang']                = $this->input->post('frek_barang');
        $data['mac_barang']                 = $this->input->post('mac_barang');
        $data['seri_barang']                = $this->input->post('seri_barang');
        $data['stok_barang']                = $this->input->post('stok_barang');
        $data['harga_barang']               = $this->input->post('harga_barang');
        $images = "";
        $upload = $this->main->upload_file_barang();
        if ($upload['result'] == "success") { // Jika proses upload sukses
            $images = $upload['file']['file_name'];
        } else { // Jika proses upload gagal
            $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
        }

        $data['img_barang'] = $images ? $images : '';

        $this->main->insert_data('tbl_barang', $data);
        redirect('barang/index');

        $this->main->update_data('tbl_barang', $data, $where);
        redirect('barang/index');
    }
    public function delete_data()
    {
        $where['id_barang']         = $this->input->post('id_barang');

        $this->main->delete_data('tbl_barang', $where);
        redirect('barang/index');
    }
}
