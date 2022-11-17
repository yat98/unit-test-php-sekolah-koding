<?php

namespace App\Models;

class Pokemon{
    private $firstname;

    public function setFirstName($firstname)
    {
        $this->firstName = $firstname;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}