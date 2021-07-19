<?php
namespace App\Service;

trait PasswordEncoder{

    public function encodePassword(string $plainPassword, string $algo = PASSWORD_DEFAULT)
    {
        try {
            return password_hash($plainPassword, $algo);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function passwordVerify(string $plainPassword, string $hash)
    {
        try {
            return password_verify($plainPassword, $hash);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}