<?php
namespace App\Fixtures;

use App\Entity\User;
use App\Model\UserModel;
use App\Service\PasswordEncoder;
use Faker\Factory;

class UserFixture {

    private $model;
    private $faker;
    use PasswordEncoder;

    public function __construct()
    {
        $this->model = new UserModel;
        $this->faker = Factory::create();
    }

    public function load()
    {
        for ($i=0; $i < 10; $i++){
            try {
                $user = new User();
                $user->setEmail($this->faker->email());
                $user->setPassword($this->encodePassword("password"));
                $user->setPseudo($this->faker->name());
                $user->setRole(json_encode(["ROLE_USER"]));
                $this->model->save($user);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}