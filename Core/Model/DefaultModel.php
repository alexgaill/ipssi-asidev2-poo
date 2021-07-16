<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel {

    protected $table;
    protected $className ="";

    public function __construct()
    {
        $this->db = new Database;
        $this->className = ucfirst($this->table);
    }

    public function findAll()
    {
        $statement = "SELECT * FROM $this->table";
        return $this->db->getData($statement, $this->className);
    }

    public function find($id)
    {
        $statement = "SELECT * FROM $this->table WHERE id = $id";
        return $this->db->getData($statement, $this->className, true);
    }
}