<?php
namespace Tests\Eloquents;

use Tests\TestCase;
use App\Accounts\Player;
use Hchs\Judge\Permission\Role;
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

    /**
     * 測試role.
     *
     * @return void
     */
    public function testRole()
    {
        $this->printTestStartMessage(__FUNCTION__);
        $role = Role::create([
            'name' => 'manager'
        ]);
        $this->assertEquals($role->name, 'manager');
    }

    /**
     * 測試role.
     *
     * @return void
     */
    public function testAttachRole()
    {
        $this->printTestStartMessage(__FUNCTION__);
        $role = Role::create([
            'name' => 'manager'
        ]);
        $player = factory(Player::class)->create([
            'name' => 'hchs',
            'email' => 'g9308370@hotmail.com',
        ]);
        $player->attachRole($role);
        $this->assertEquals($role->name, 'manager');
        $this->assertTrue($player->hasRole('manager'));
    }

    /**
     * 測試role.
     *
     * @return void
     */
    public function testDettachRole()
    {
        $this->printTestStartMessage(__FUNCTION__);
        $role = Role::create([
            'name' => 'manager'
        ]);
        $player = factory(Player::class)->create([
            'name' => 'hchs',
            'email' => 'g9308370@hotmail.com',
        ]);
        $player->attachRole($role);
        $this->assertEquals($role->name, 'manager');
        $this->assertTrue($player->hasRole('manager'));

        $player->detachRole($role);
        $this->assertFalse($player->hasRole('manager'));
    }

}
