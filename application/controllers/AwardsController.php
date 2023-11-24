<?php

class AwardsController extends CI_Controller
{
    protected $userData;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("panel/faculty/AwardsModel", "AwardsModel");
    }

    public function index(){
        $this->userData = $this->AwardsModel->get(); 
        echo "<pre>";
        print_r($this->userData);
    }
}
