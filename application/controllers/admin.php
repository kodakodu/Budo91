<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    /*     * public function view($pages = 'accueil')
      {
      if (! file_exists(APPPATH.'/views/pages/'.$pages.'.php'))
      {
      show_404();
      }


      //$data['title']= ucfirst($pages);

      $this->load->view('templates/header', $data);
      //$this->load->view('pages/'.$pages, $data);
      $this->load->view('pages/accueil', $data);
      $this->load->view('templates/footer', $data);
      }* */

    public function index() {
        $this->load->model('model_disciplines');
        $this->load->model('model_clubs');
        $data = array();

        $data['disciplines_liste'] = $this->model_disciplines->get_disciplines();
        //$data['clubs_liste'] = $this->model_clubs->get_clubs();
        //$this->load->view('templates/header.php');
        $this->load->view('admin/index2', $data);
        //$this->load->view('templates/footer.php');
    }

    public function club() {
        //$this->load->model('model_disciplines');

        $data = array();

        //$data['disciplines_liste'] = $this->model_disciplines->get_disciplines();
        $this->load->view('admin/admin_add_club', $data);
    }

    /* public function admin_list_clubs ()
      {
      //$this->load->model('model_disciplines');

      $data = array();

      //$data['clubs_liste'] = $this->model_clubs->get_clubs();
      //$data['disciplines_liste'] = $this->model_disciplines->get_disciplines();
      // if($data->num_rows() > 0) {
      //    $results = $query->result();
      // }
      $this->load->view('admin/admin_list_clubs', $data);

      } */

    public function add_club() {
        /*$this->load->model('model_clubs');
        
        $data = array(
            'nom' => $this->input->post('nom'),
            'desc' => $this->input->post('desc'),
        );
        $this->db->insert('clubs', $data);
        */
        
        $date = new DateTime();
		$date->format('Y-m-d H:i:s');    // MySQL datetime format
		$date->getTimestamp();   
          $data = array(
                    'nom' => $this->input->post('nom'),
                    'desc' => $this->input->post('desc'),                    
                    'adresse' => $this->input->post('adresse'),
                    'cp'=> $this->input->post('cp'),
                    'ville'=> $this->input->post('ville'),
                    'date_creation'=> 'now()'
        );

      $this->db->insert('clubs',$data);
      redirect("admin/index");

    }

}
