<?php

class Page extends GlobalPage{

    public $username = "John Doe";
    private $text = "Lorem Ipsum";
    private static $prop = "Je suis une propriété static";

    public function hello ()
    {
        $date = new DateTime();
        $formatDate = $date->format("d m Y");
        $formatTime = $date->format("H:i:s");

        return "
            <h1>Hello $this->username </h1>
            <p>Nous sommes le $formatDate, il est $formatTime </p>
            <p>$this->text </p>
        ";
    }

    public function getParentClass()
    {
        return "<h2>Nous sommes sur la class Page et la class parent est $this->classe </h2>";
    }

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     */
    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }

    public static function getProp()
    {
        return self::$prop;
    }
}