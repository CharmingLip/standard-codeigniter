<?php

/**
 * Class Admin
 */
class Admin extends CI_Controller
{
    public function index()
    {
        return $this->load->view('admin');
    }
}