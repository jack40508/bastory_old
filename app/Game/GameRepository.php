<?php

namespace App\Game;

use Illuminate\Http\Request;
use App\Game\Game;

class GameRepository
{
	public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function getGameByTeamID($team_id)
    {
    	$games = $this->game->where('team_id',$team_id)->get();

    	return $games;
    }

    public function getGameTime($game_id)
    {
    	$games = $this->game->where('id',$game_id)->first();

    	return $games;
    }
}