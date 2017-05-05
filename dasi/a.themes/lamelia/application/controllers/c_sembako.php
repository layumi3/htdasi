<?php
class C_sembako extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper(array('form','url'));
		$this->load->model('m_sembako','',TRUE);
		$this->load->library('pagination');
		$this->load->library('upload');
		//$this->load->helper('string');
	}
	function display_home(){
		$data['content_view']="v_home_page";
		$this->load->view('v_login_page',$data);
	}
	function display_barang(){
		$data['content_view']="v_list_barang";

		$query=$this->db->query("select * from barangs");
		$n = $query->num_rows();

		$config['base_url'] = base_url().'index.php/c_sembako/display_barang/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '[';
		$config['full_tag_close'] = ']';

		$this->pagination->initialize($config);
		$data['content_view']="v_list_barang";
		$data['list_barang']=$this->m_sembako->get_list_barang($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_page',$data);
	}
	function display_kontak(){
		$data['content_view']="v_kontak";
		$this->load->view('v_login_page',$data);
	}
	function display_tentang(){
		$data['content_view']="v_tentang";
		$this->load->view('v_login_page',$data);
	}

	
	function display_toko(){
		$query=$this->db->query("select * from tokos");
		$n = $query->num_rows();

		$config['base_url'] = base_url().'index.php/c_sembako/display_toko/';
		$config['total_rows'] = $n;
		$config['per_page'] = '10';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] = '[';
		$config['full_tag_close'] = ']';

		$this->pagination->initialize($config);
		$data['content_view']="v_list_toko";
		$data['list_toko']=$this->m_sembako->get_list_toko($config['per_page'],$this->uri->segment(3));
		$this->load->view('v_login_page',$data);
	}

	function tambah_toko(){
		if($this->input->post('submit'))
		{
			$this->m_sembako->insert_toko();
			redirect ('c_sembako/display_toko');
		}
		$data['content_view']="vtambah_toko";
		$this->load->view('v_login_page',$data);

	}
	function tambah_barang(){
		if($this->input->post('submit'))
		{
			$this->m_sembako->insert_barang();
			redirect ('c_sembako/display_barang');
		}
		$data['content_view']="vtambah_barang";
		$this->load->view('v_login_page',$data);
	}

	function tampil_detail_toko(){
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_toko";
		//$data['row_data']= $this->m_sembako->get_detail_toko($vid);
		$row = $this->m_sembako->get_detail_toko($vid);
		$data['row'] = $row;
		$this->load->view('v_login_page',$data);

	}
		function tampil_detail_barang(){
		
		
		$data['vid']=$this->uri->segment(3);
		$vid=$this->uri->segment(3);
		$data['content_view']="vtampil_detail_barang";
		$row = $this->m_sembako->get_detail_barang($vid);
		$data['row'] = $row;
		$this->load->view('v_login_page',$data);

	}
	function tampil_form_update_toko(){

	}
	function update_db(){

	}
	function cari_barang(){
		$data['content_view']="v_list_barang";
		$data['list_barang']=$this->m_sembako->search_barang();
		
		$this->load->view('v_login_page',$data);
	}




	function hapus_toko(){
		$vid = $this->uri->segment(3);
		$this->m_sembako->del_toko($vid);
		redirect('c_sembako/display_toko');
	}

	function hapus_barang(){
		$vkode = $this->uri->segment(3);
		$this->m_sembako->del_barang($vkode);
		redirect('c_sembako/display_barang');
	}

	function do_upload(){
		$config['upload_path']='./uploads/';
		$config['allowed_types']= 'gif|bmp|jpg|png|doc|docx|php|xls|xlsx|pdf';
		$config['max_size'] = '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload',$config);
		
		if(! $this->upload->do_upload()){
			$data['content_view']="v_home_page";
			$data['list_sembako']=$this->m_sembako->list_unggah();
			$this->load->view('v_login_page',$data);
		}
		else{
			$data['content_view']="v_home_page";
			$file=$this->upload->data();
			$vnamafile=$file['file_name'];
			$vdeskripsi=$this->input->post('deskripsi');
			$this->m_sembako->insertdata($vnamafile,$vdeskripsi);
			$data['list_sembako']=$this->m_sembako->list_unggah();
			$this->load->view('v_login_page',$data);
		}
	}	
}
?>