<?php
namespace App\Service;

trait ChangeText {

    public function upper(string $text)
    {
        return ucfirst($text);
    }
}