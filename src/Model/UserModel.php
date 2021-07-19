<?php
namespace App\Model;

use Core\Model\DefaultModel;
use RuntimeException;

class UserModel extends DefaultModel {
    
    protected $table = "user";

    public function save (mixed $data)
    {
        parent::save($data);

        if (is_object($data)) {
            $statement = "INSERT INTO user (email, password, pseudo, role) VALUES (:email, :password, :pseudo, :role)";
            $prep = $this->db->getPDO->prepare();
            $prep->bindValue(':email', $data->getEmail());
            $prep->bindValue(':password', $data->getPassword());
            $prep->bindValue(':pseudo', $data->getPseudo());
            $prep->bindValue(':role', $data->getRole());
            
            return $prep->execute();
        } else {
            throw new RuntimeException("L'enregistrement n'a pas fonctionné, un paramètre doit être manquant ou mal écrit", 1);
        }
    }

}