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

    public function save (mixed $data)
    {
        if (!empty($data)) {
            if (is_array($data)) {
                $entity = new $this->className($data);
                $statement = $this->arrayStatement($data);
                return $this->db->prepare($statement);
            } 
        }
    }

    private function arrayStatement(array $data)
    {
        $insert = "INSERT INTO $this->table (";
        $values = "VALUES (";

        foreach ($data as $key => $value) {
            $insert .= "$key, ";
            $values .= "'$value', ";
        }
        $insert = str_split($insert, -2)[0];
        $values = str_split($values, -2)[0];

        return $insert . ") ". $values . ")";
    }
}