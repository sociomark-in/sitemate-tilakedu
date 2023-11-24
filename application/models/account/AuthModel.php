<?php

class AuthModel extends CI_Model
{
    protected $results = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function authenticate(array $request) : bool{
        $this->load->model("account/UserModel", "UserModel");
        $results = $this->UserModel->get_where($request);
        return false;
    }
}
