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
        ]);
    }
}
