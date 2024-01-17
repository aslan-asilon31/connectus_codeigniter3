<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function index()
                        $data['title']=' Dashboard Page';
                        $data['header']='backend_layout_header';
                        $data['footer']='backend_layout_footer';
                        $data['content']='dashboard';


        $this->load->view('layout_backend', $data); 
        }
}