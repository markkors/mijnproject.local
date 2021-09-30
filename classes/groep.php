<?php


class groep
{
    public $persons=[];

    public function addPerson(person $p) {
        array_push($this->persons,$p);
    }

}