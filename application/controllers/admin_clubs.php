<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_clubs extends CI_Controller {

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
        $this->load->helper('date');
        $datestring = "%d/%m/%Y";
        $time = time();

        //echo mdate($datestring, $time);

        $this->load->model('model_clubs');

        $data = array();

        $data['clubs_liste'] = $this->model_clubs->get_clubs();
        //$data['count_clubs'] = $this->model_clubs->count_clubs();
        //$this->load->view('templates/header.php');
        $this->load->view('admin/admin_list_clubs', $data);
        //$this->load->view('templates/footer.php');
    }

    public function insert(){
      $data = array(
                    'nom' => $this->input->post('nom'),
                    'desc' => $this->input->post('desc'),                    
                    'adresse' => $this->input->post('adresse'),
                    'cp'=> $this->input->post('cp'),
                    'ville'=> $this->input->post('ville'),
                    'date_creation'=> $this->input->post('date_creation')
        );

      $this->db->insert('clubs',$data);
      redirect("admin_clubs");
    }

}
