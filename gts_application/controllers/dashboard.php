<?php if (! defined('BASEPATH')) exit ('No diresct script allowed');


/**
 * Dashboard
 */
class Dashboard extends CI_Controller {
	
 function __construct()
    {
        parent::__construct();
        
        $usersnip = $this->session->userdata('nip');
      
        if (($usersnip == '') || (!isset ($usersnip)))
        {
            $this->load->view('login_form');
        }
        else{ }
    }
    public function index(){
        $data = array(
            'mainview'=>'dashboard/view_dashboard'
            ,'information_message'=>'SELAMAT DATANG DI HALAMAN ADMINISTRATOR'
            ,'title'=>'DASHBOARD '.APP_NAME);
        $this->parser->parse('layout_dashboard/maintemplate',$data);
    }
}