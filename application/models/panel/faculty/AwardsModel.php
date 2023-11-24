<?php

class AwardsModel extends CI_Model
{

    protected $results = [];
    protected $user = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function get(): array
    {
        return $this->UserModel->get();
    }

    /**
     * insert
     * 
     * Insert a New Award Record in the Database.
     *
     * @param  mixed $data
     * @return bool
     */
    public function insert(array $data): bool
    {
        return false;
    }

    public function get_where(array $condition, array $limit): array
    {
        return $this->results;
    }
}
