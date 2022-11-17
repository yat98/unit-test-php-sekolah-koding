<?php

namespace App\Models;

class Player{
    private $name;
    private $pokemons = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPokemons()
    {
        return $this->pokemons;
    }

    public function catch($name)
    {
        $this->pokemons[] = $name;
        
        return $this->getPokemons();
    }
}