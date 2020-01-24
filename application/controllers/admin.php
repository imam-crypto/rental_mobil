<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
	}

    public function index()
    {

        $this->load->view('templates_admin/header'); 
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');  
        $this->load->view('templates_admin/footer');
    
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome?pesan=logout');
	}

	
    public function mobil()
    {
		$data['mobil'] = $this->M_rental->get_data('tb_mobil')->result();
		$this->load->view('templates_admin/header'); 
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_mobil',$data);
		$this->load->view('templates_admin/footer');
	}
	
	function tambah_mobil(){		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_mobil');
		$this->load->view('templates_admin/footer');
	}

	function mobil_aksi_tambah(){		
		$merk = $this->input->post('merk');
		$plat_nomor = $this->input->post('plat_nomor');
		$warna = $this->input->post('warna');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');
		$this->form_validation->set_rules('merk','Merk Mobil','required');
		$this->form_validation->set_rules('status','Status Mobil','required');

		if($this->form_validation->run() != false){
			$data = array(
				'merk' => $merk,
				'plat_nomor' => $plat_nomor,			
				'warna' => $warna,			
				'tahun' => $tahun,			
				'status' => $status
			);
			$this->M_rental->insert_data($data,'tb_mobil');
			redirect(base_url().'admin/mobil');
		}else{
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_mobil');
			$this->load->view('templates_admin/footer');
		}
	}


    function mobil_edit($id){				
		$where = array(
			'id_mobil' => $id		
		);
		$data['mobil'] = $this->M_rental->edit_data($where,'tb_mobil')->result();		
        $this->load->view('templates_admin/header'); 
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/mobil_edit',$data);
		$this->load->view('templates_admin/footer');
		
	}

	function mobil_update(){		
		$id = $this->input->post('id');
		$merk = $this->input->post('merk');
		$plat = $this->input->post('plat');
		$warna = $this->input->post('warna');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');
		$this->form_validation->set_rules('merk','Merk Mobil','required');
		$this->form_validation->set_rules('status','Status Mobil','required');
		if($this->form_validation->run() != false){
			$where = array(
				'id_mobil' => $id		
			);
			$data = array(
				'merk' => $merk,
				'plat_nomor' => $plat,			
				'warna' => $warna,			
				'tahun' => $tahun,			
				'status' => $status
			);
			$this->M_rental->update_data($where,$data,'tb_mobil');
			redirect(base_url().'admin/mobil');
		}else{
			$where = array(
				'id_mobil' => $id		
			);
			$data['mobil'] = $this->M_rental->edit_data($where,'tb_mobil')->result();		
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/mobil_edit',$data);
			$this->load->view('templates_admin/footer');
			
		}
	}

	function mobil_hapus($id){				
		$where = array(
			'id_mobil' => $id		
		);
		$this->M_rental->delete_data($where,'tb_mobil');		
		redirect(base_url().'admin/mobil');
	}

	
	function penyewa(){
		$data['penyewa'] = $this->M_rental->get_data('tb_penyewa')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_penyewa',$data);
		$this->load->view('templates_admin/footer');
	}

	function tambah_penyewa(){		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_penyewa');
		$this->load->view('templates_admin/footer');
	}

	function penyewa_aksi_tambah(){		
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no_hp = $this->input->post('no_hp');
		$no_ktp = $this->input->post('no_ktp');
		$this->form_validation->set_rules('nama','nama','required');		

		if($this->form_validation->run() != false){
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,			
				'jk' => $jk,			
				'no_hp' => $no_hp,			
				'no_ktp' => $no_ktp
			);
			$this->M_rental->insert_data($data,'tb_penyewa');
			redirect(base_url().'admin/penyewa');
		}else{
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_penyewa');
			$this->load->view('templates_admin/footer');
		}
		
	}

	function penyewa_edit($id){				
		$where = array(
			'id_penyewa' => $id		
		);
		$data['penyewa'] = $this->M_rental->edit_data($where,'tb_penyewa')->result();		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/penyewa_edit',$data);
		$this->load->view('templates_admin/footer');
	}

	function penyewa_update(){		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no_ktp = $this->input->post('no_ktp');
		$no_hp = $this->input->post('no_hp');
		$this->form_validation->set_rules('nama','nama','required');		

		if($this->form_validation->run() != false){
			$where = array(
				'id_penyewa' => $id		
			);
			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,			
				'jk' => $jk,			
				'no_ktp' => $no_ktp,			
				'no_hp' => $no_hp
			);
			$this->M_rental->update_data($where,$data,'tb_penyewa');
			redirect(base_url().'admin/penyewa');
		}else{
			$where = array(
				'id' => $id		
			);
			$data['kostumer'] = $this->M_rental->edit_data($where,'tb_penyewa')->result();		
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/penyewa_edit',$data);
			$this->load->view('admin/footer');
		}
	}

	function penyewa_hapus($id){				
		$where = array(
			'id_penyewa' => $id		
		);
		$this->M_rental->delete_data($where,'tb_penyewa');		
		redirect(base_url().'admin/penyewa');
}

	
	function transaksi(){
		$data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_mobil,tb_penyewa where transaksi_mobil=id_mobil and transaksi_penyewa=id_penyewa")->result();		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi',$data);
		$this->load->view('templates_admin/footer');
	}

	function transaksi_add(){		
		$w = array('status'=>'1');
		$data['mobil'] = $this->M_rental->edit_data($w,'tb_mobil')->result();
		$data['penyewa'] = $this->M_rental->get_data('tb_penyewa')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_transaksi',$data);
		$this->load->view('templates_admin/footer');
	}

	function transaksi_add_act(){		
		$penyewa = $this->input->post('penyewa');
		$mobil = $this->input->post('mobil');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$harga = $this->input->post('harga');
		$denda = $this->input->post('denda');

		$this->form_validation->set_rules('penyewa','penyewa','required');		
		$this->form_validation->set_rules('mobil','Mobil','required');		
		$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','required');		
		$this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required');		
		$this->form_validation->set_rules('harga','Harga','required');		
		$this->form_validation->set_rules('denda','Denda','required');		

		if($this->form_validation->run() != false){
			$data = array(
				'transaksi_karyawan' => $this->session->userdata('id'),
				'transaksi_penyewa' => $penyewa,
				'transaksi_mobil' => $mobil,
				'transaksi_tgl_pinjam' => $tgl_pinjam,			
				'transaksi_tgl_kembali' => $tgl_kembali,			
				'transaksi_harga' => $harga,			
				'transaksi_denda' => $denda,			
				'transaksi_tgl' => date('Y-m-d')
			);
			$this->M_rental->insert_data($data,'tb_transaksi');

			
			$d = array(
				'status' => '2'
			);
			$w = array(
				'id_mobil' => $mobil
			);
			$this->M_rental->update_data($w,$d,'tb_mobil');			
			redirect(base_url().'admin/transaksi');
		}else{
			$w = array('status'=>'1');
			$data['mobil'] = $this->M_rental->edit_data($w,'tb_mobil')->result();
			$data['penyewa'] = $this->M_rental->get_data('tb_penyewa')->result();
	
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_transaksi',$data);
			$this->load->view('templates_admin/footer');
		}
	}

	function transaksi_hapus($id){				
		$w = array(
			'id_transaksi' => $id		
		);
		$data = $this->M_rental->edit_data($w,'tb_transaksi')->row();

		$ww = array(
			'id_mobil' => $data->transaksi_mobil		
		);
		$data2 = array(
			'status' => '1'
		);
		$this->M_rental->update_data($ww,$data2,'tb_mobil');

		$this->M_rental->delete_data($w,'tb_transaksi');		
		redirect(base_url().'admin/transaksi');
	}

	function transaksi_selesai($id){			
		$data['mobil'] = $this->M_rental->get_data('tb_mobil')->result();
		$data['penyewa'] = $this->M_rental->get_data('tb_penyewa')->result();			
		$data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_mobil,tb_penyewa where transaksi_mobil=id_mobil and transaksi_penyewa=id_penyewa and id_transaksi='$id'")->result();		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_selesai',$data);
		$this->load->view('templates_admin/footer');
	}

	function transaksi_selesai_act(){			
		$id = $this->input->post('id');
		$tgl_dikembalikan = $this->input->post('tgl_dikembalikan');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$mobil = $this->input->post('mobil');
		$denda = $this->input->post('denda');		
		
		$this->form_validation->set_rules('tgl_dikembalikan','Tanggal Di Kembalikan','required');		

		if($this->form_validation->run() != false){		
			
			$batas_kembali = strtotime($tgl_kembali);
			$dikembalikan = strtotime($tgl_dikembalikan);
			$selisih = abs(($batas_kembali - $dikembalikan)/(60*60*24));			
			$total_denda = $denda*$selisih;
			
				$data = array(
				'transaksi_tgl_dikembalikan' => $tgl_dikembalikan,
				'transaksi_status' => '1',	
				'transaksi_total_denda' => $total_denda
			);
			$w = array(
				'id_transaksi' => $id
			);
			
			$this->M_rental->update_data($w,$data,'tb_transaksi');

			// update status mobil
			$data2 = array(
				'status' => '1'
			);
			$w2 = array(
				'id_mobil' => $mobil
			);
			
			$this->M_rental->update_data($w2,$data2,'tb_mobil');			
			redirect(base_url().'admin/transaksi');
		}else{
			$data['mobil'] = $this->M_rental->get_data('tb_mobil')->result();
			$data['penyewa'] = $this->M_rental->get_data('tb_penyewa')->result();			
			$data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_mobil,tb_penyewa where transaksi_mobil=id_mobil and transaksi_penyewa=id_penyewa and id_transaksi='$id'")->result();		
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/header');
			$this->load->view('admin/transaksi_selesai',$data);
			$this->load->view('templates_admin/footer');
			
			
		}
	}
	

	function laporan_pdf_data_mobil(){
		$this->load->library('dompdf_gen');	
	
		$data['mobil'] = $this->M_rental->get_data('tb_mobil')->result();
		$this->load->view('admin/laporan_data_mobil',$data); 
											
		$paper_size  = 'A4'; 	
		$orientation = 'landscape'; 
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf", array('Attachment'=>0)); 

	}

	function laporan_pdf_data_penyewa(){
		$this->load->library('dompdf_gen');	
	
		$data['penyewa'] = $this->M_rental->get_data('tb_penyewa')->result();
		$this->load->view('admin/laporan_data_penyewa',$data); 
											
		$paper_size  = 'A4';
		$orientation = 'landscape'; 
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_penyewa.pdf", array('Attachment'=>0)); 
	}



}