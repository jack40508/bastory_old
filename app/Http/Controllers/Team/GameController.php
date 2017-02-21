<?php 
namespace App\Http\Controllers\Team;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Organization\TeamRepository;
use App\Game\GameRepository;

use Illuminate\Http\Request;

class GameController extends Controller {

	public function __construct(TeamRepository $team,GameRepository $game)
    {
        $this->team = $team;
        $this->game = $game;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($team_englishname)
	{
		//
		$team = $this->team->getTeamByEnglishName($team_englishname);
		$games = $this->game->getGameByTeamID($team->id);

		return view('team.game.index',compact('team','games'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	//Past Game View
	public function pastgame($team_englishname)
	{
		//
		$team = $this->team->getTeamByEnglishName($team_englishname);

		return view('team.game.index-past',compact('team'));
	}
}
