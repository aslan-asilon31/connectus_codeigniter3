<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function index()
        {
          $data = array(
            'title' => 'Your Page Title',
            'header' => 'Welcome to Your Site',
            'content' => 'This is the main content of your page.',
        );

        $this->load->view('layout_backend', $data); 
        }
}