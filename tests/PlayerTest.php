<?php

use App\Models\Player;
use App\Models\Pokemon;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class PlayerTest extends TestCase
{
    private $player;

    protected function setUp(): void
    {
        $this->player  = new Player('Hidayat');
    }

    /** @test
     * test player name
     */
    public function checkName()
    {
        $this->assertEquals($this->player->getName(), 'Hidayat');
    }

    /** @test
     * default - player dont have pokemon
     */
    public function checkDefaultPokemon()
    {
        $player  = new Player('Hidayat');

        $this->assertEmpty($this->player->getPokemons());
    }

    /** @test
     * player can catch pokemon
     */
    public function canCatchPokemon()
    {
        $this->player->catch('Pikachu');

        $this->assertCount(1, $this->player->getPokemons());
    }

    /** @test
     * after catch pokemon add to list
     */
    public function checkCatchPokemonInLists()
    {
        $this->player->catch('Mew');

        $this->assertContains('Mew', $this->player->getPokemons());
    }

    /** @test
     * pokemon not show in list if pokemon not catch
     */
    public function checkUnCatchPokemonNotInLists()
    {
        $this->player->catch('Squirtle');

        $this->assertNotContains('Ivysaur', $this->player->getPokemons());
    }
}
