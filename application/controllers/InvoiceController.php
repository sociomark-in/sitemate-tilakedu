<?php

class InvoiceController extends CI_Controller
{
    public function index(){
        $this->load->view('panel/invoices/index');
    }
}
