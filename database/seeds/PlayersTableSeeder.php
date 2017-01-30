<?php

use Illuminate\Database\Seeder;
use App\Accounts\Player;
use Carbon\Carbon;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'name' => 'hchs',
            'email' => 'hchs@bastory.com',
            'password' => bcrypt('123456'),
            'nickname' => 'hchs',
            'birth' => Carbon::now()->toDateString(),
            'bats' => '右打',
            'throw' => '右投',
        ]);

        Player::create([
            'name' => 'yoyu',
            'email' => 'yoyu@bastory.com',
            'password' => bcrypt('123456'),
            'nickname' => 'YoYu',
            'birth' => Carbon::now()->toDateString(),
            'bats' => '右打',
            'throw' => '右投',
        ]);
    }
}
