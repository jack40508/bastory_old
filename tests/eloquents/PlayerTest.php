<?php
namespace Tests\Eloquents;

use Tests\TestCase;
use App\Accounts\Player;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PlayerTest extends TestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->printTestStartMessage(__FUNCTION__);
        $this->assertEquals(1,1);
    }

    /**
     * 測試factory.
     *
     * @return void
     */
    public function testFactory()
    {
        $this->printTestStartMessage(__FUNCTION__);
        $player = factory(Player::class)->create([
            'name' => 'hchs',
            'email' => 'g9308370@hotmail.com',
        ]);
        $this->assertEquals($player->name, 'hchs');
        $this->assertEquals($player->email, 'g9308370@hotmail.com');
    }
}
