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
        $data['barang']             = $this->main->get_data_join('tbl_barang', 'tbl_jenis', 'tbl_barang.id_jenis=tbl_jenis.id_jenis');
        
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
    public function print_excel(){        
        $data['data']= $this->main->show_data_barang_excel();
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator("DISKOMINFO BONDOWOSO");
        $object->getProperties()->setTitle("Data Barang");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->mergeCells('A1:S1')->setCellValue('A1','DATA ROUTER')->getColumnDimension('A')->setAutoSize(true);
        $object->getActiveSheet()->mergeCells('A2:S2')->setCellValue('A2','DISKOMINFO BONDOWOSO')->getColumnDimension('A')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('A3','No')->getColumnDimension('A')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('B3','JENIS BARANG')->getColumnDimension('B')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('C3','NAMA BARANG')->getColumnDimension('C')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('D3','KODE KEGIATAN')->getColumnDimension('D')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('E3','NAMA KEGIATAN')->getColumnDimension('E')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('F3','MODEL NO')->getColumnDimension('F')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('G3','UPC')->getColumnDimension('G')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('H3','H/W VERSI')->getColumnDimension('H')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('I3','CMIIT')->getColumnDimension('I')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('J3','TYPE')->getColumnDimension('J')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('K3','K/G')->getColumnDimension('K')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('L3','NAMA PRODUK')->getColumnDimension('L')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('M3','PLUG')->getColumnDimension('M')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('N3','POWER')->getColumnDimension('N')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('O3','FREKUENSI')->getColumnDimension('O')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('P3','SATUAN')->getColumnDimension('P')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('Q3','SERI BARANG')->getColumnDimension('Q')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('R3','MAC BARANG')->getColumnDimension('R')->setAutoSize(true);
        $object->getActiveSheet()->setCellValue('S3','KETERANGAN')->getColumnDimension('S')->setAutoSize(true);

        $baris = 4;
        $no = 1;
        
        foreach($data['data'] as $row){
            $object->getActiveSheet()->setCellValue('A'.$baris,$no++)->getColumnDimension('A')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('B'.$baris,$row->nama_jenis)->getColumnDimension('B')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('C'.$baris,$row->nama_barang)->getColumnDimension('C')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('D'.$baris,$row->kode_kegiatan)->getColumnDimension('D')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('E'.$baris,$row->nama_kegiatan)->getColumnDimension('E')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('F'.$baris,$row->model_barang)->getColumnDimension('F')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('G'.$baris,$row->upc_barang)->getColumnDimension('G')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('H'.$baris,$row->hwversi_barang)->getColumnDimension('H')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('I'.$baris,$row->cmiit_barang)->getColumnDimension('I')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('J'.$baris,$row->type_barang)->getColumnDimension('J')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('K'.$baris,$row->kg_barang)->getColumnDimension('K')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('L'.$baris,$row->produk_barang)->getColumnDimension('L')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('M'.$baris,$row->plug_barang)->getColumnDimension('M')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('N'.$baris,$row->power_barang)->getColumnDimension('N')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('O'.$baris,$row->frek_barang)->getColumnDimension('O')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('P'.$baris,$row->nama_satuan)->getColumnDimension('P')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('Q'.$baris,$row->seri_barang)->getColumnDimension('Q')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('R'.$baris,$row->mac_barang)->getColumnDimension('R')->setAutoSize(true);
            $object->getActiveSheet()->setCellValue('S'.$baris,date('Y',strtotime($row->tgl_barang)))->getColumnDimension('S')->setAutoSize(true);
        
            $baris++;
        }
        $styleArrayHeader = array(
            'borders' => array(
                    'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                    ),
                    'left' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN,
                    ),
                    'right' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN,
                    ),
                    'bottom' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN,
                ),
            ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                )
        );
        $from = "A1"; // or any value
        $to = "S2"; // or any value
        $object->getDefaultStyle()->applyFromArray($styleArrayHeader);
        $object->getActiveSheet()->getStyle("$from:$to")->getFont()->setBold( true );

        $styleArray = array(
            'borders' => array(
                'allborders' => array(
                  'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        )
    );
        $filename = "Data_Barang".'.xlsx';
        $object->getDefaultStyle()->applyFromArray($styleArray);
        $object->getActiveSheet()->setTitle("Data Barang");
        $object->getActiveSheet()->calculateColumnWidths();
        header('Content-Type: application/vnd.openxmlformats-officedocument.speadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
        $writer = PHPExcel_IOFactory::createwriter($object,'Excel2007');
        $writer->save('php://output');
        exit;
    }
}
