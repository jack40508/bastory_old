<?php

use Illuminate\Database\Seeder;
use App\Organization\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'YoYuBrother',
            'english_name' => 'YoYuBrother',
            'location' => '台北',
            'logo' => 'YoYuBrother.png',
            'banner' => 'YoYuBrother.jpg',
            'about' => 'It is a test team',
            'manager_id' => '2',
        ]);
    }
}
