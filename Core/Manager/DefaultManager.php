<?php
namespace Core\Manager;

use Core\Interfaces\Manager;
use Core\Interfaces\Manager2;

abstract class DefaultManager implements Manager, Manager2{

    public abstract function getAll();

    public function obligatoire(){}

    public function test()
    {
        echo "<p>Test du parent</p>";
    }
}