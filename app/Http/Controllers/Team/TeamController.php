<?php 
namespace App\Http\Controllers\Team;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Organization\TeamRepository;

use Illuminate\Http\Request;

class TeamController extends Controller {

	public function __construct(TeamRepository $team)
    {
        $this->team = $team;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$teams = $this->team->getAllTeams();

		return view('team.home.index',compact('teams'));
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
	public function show($teamname)
	{
		//
		$team = $this->team->getTeamByName($teamname);
		
		return view('team.home.show',compact('team'));
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

	public function introduction()
	{
		return view('team.home.introduction');
	}

}
