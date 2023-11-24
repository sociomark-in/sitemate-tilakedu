<?php

class UserModel extends CI_Model
{
    protected $user = [];
    protected $result = [];
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->result = json_decode(json_encode($this->db->get_where('stm_users', ['status' => 1])->result()), true, 4);
        return $this->result;
    }

    public function get_where(array $condition): array
    {
        $this->db->where($condition);
        $this->result = json_decode(json_encode($this->db->get('stm_users')->row()), true, 2);
        return $this->result;
    }
}
