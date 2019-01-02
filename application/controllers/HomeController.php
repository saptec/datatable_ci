<?php defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->model('HomeModel', 'hmodel');

    }
    public function index()
    {
        $dado['conteudo'] = "home";
        $this->load->view('template/layout', $dado);

    }
    public function dt_todos()
    {
        // aqui não pode json_encode
        echo $this->hmodel->getAlldt();
    }

}
