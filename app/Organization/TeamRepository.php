<?php
	
namespace App\Organization;

use Illuminate\Http\Request;
use App\Organization\Team;

class TeamRepository
{
	public function __construct(Team $team)
    {
        $this->team = $team;
    }

    public function getAllTeams()
    {
    	$teams = $this->team->get();

    	return $teams;
    }

    public function getTeamByName($teamname)
    {
        $teams = $this->team->where('english_name',$teamname)->first();

        return $teams;
    }
}