<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        //helper untuk melakukan download
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('v_download');
	}
//fungsi untuk melakukan download. pada force_download: nama folder/nama gambar yang dipilih
	public function lakukan_download(){				
		force_download('gambar/malasngoding.png',NULL);
	}	

}