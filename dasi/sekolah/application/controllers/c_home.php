<?php
	class C_home extends CI_Controller {
	
	function display(){
	$data['content_view'] = "v_home.php";
	$this->load->view('v_template',$data);
	
	}
	function beranda(){
	$data['content_view'] = "v_home.php";
	$this->load->view('v_template',$data);
	
	}


	}
?>