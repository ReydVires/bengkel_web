<?php
class Homepage extends CI_Controller{
    
    function index(){
        $this->load->view('v_homepage');
    }
}