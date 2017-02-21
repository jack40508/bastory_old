<?php

use Illuminate\Database\Seeder;
use App\Game\Game;
use Carbon\Carbon;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Game::create([
        	'name' => '測試用比賽',
        	'team_id' => '1',
        	'location' => '新莊棒球場',
        	'address' => '新莊棒球場',
        	'datetime' => Carbon::now()->toDateTimeString(),
        	'gather_at' => Carbon::now()->toDateTimeString(),
        	'category' => '祐祐盃熱身賽',
        	'contant' => '虛構的假比賽',
        ]);
    }
}
