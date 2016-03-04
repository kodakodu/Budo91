<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
	
/**
 * 
 */
class Admin_disciplines extends CI_Controller {
	
	public function index() {
			$this->load->model('model_disciplines');
			$data = array();
			$data['disciplines_liste'] = $this->model_disciplines->get_disciplines();
		    $this->load->view('admin/admin_list_disciplines',$data);
	}
}

?>