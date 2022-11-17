<?php

use App\Models\Pokemon;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class PokemonTest extends TestCase
{
    /** @test */
    public function checkFirstName()
    {
        $pokemon = new Pokemon;
        $pokemon->setFirstName('Charmender');
        $this->assertEquals($pokemon->getFirstName(),'Charmender');
    }
}
