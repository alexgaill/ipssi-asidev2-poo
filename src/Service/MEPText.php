<?php
namespace App\Service;

trait MEPText {

    public function upper(string $text)
    {
        return strtoupper($text);
    }

    public function test()
    {
        parent::test();
        echo "<p>Test du trait</p>";
    }

    // Si une class, un parent et un trait ont une méthode avec le même nom, un ordre est établit.
    // 1- C'est la méthode de la class qui est appelée
    // 2- C'est la méthode du trait qui est appelée
    // 3- C'est la méthode du parent qui est appelée
}