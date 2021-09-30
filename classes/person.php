<?php


class person
{
    public $f;
    public $l;

    /***
     * person constructor.
     * @param $f voornaam
     * @param $l achternaam
     */
    public function __construct(string $f,string $l)
    {
        $this->f=$f;
        $this->l=$l;
    }

    public function getFullName() : string
    {
        return $this->f . " " . $this->l;
    }
}