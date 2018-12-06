<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        echo 'Hello';
    }
    public function register()
    {
        $this->load->view('register');
    }
}
?>