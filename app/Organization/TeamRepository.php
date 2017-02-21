<?php
	
namespace App\Organization;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
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

    public function getTeamByEnglishName($team_englishname)
    {
        $teams = $this->team->where('english_name',$team_englishname)->first();

        return $teams;
    }

    public function createFromUser($request,$user)
    {
        //儲存球隊Logo
        $logo_file = $request->logo;
        $logo_path = $request->logo->path();
        $logo_extension = $request->logo->extension();
        $logo_filename = $request->get('english_name') . '.' . $logo_extension;
        $logo_upload_success = $logo_file->move('images/logo', $logo_filename, $logo_extension);

        //儲存球隊banner
        $banner_file = $request->banner;
        $banner_path = $request->banner->path();
        $banner_extension = $request->banner->extension();
        $banner_filename = $request->get('english_name') . '.' . $banner_extension;
        $banner_upload_success = $banner_file->move('images/banner', $banner_filename, $banner_extension);

        $newteam = New Team;
        $newteam->name = $request->get('name');
        $newteam->english_name = $request->get('english_name');
        $newteam->location = $request->get('location');
        $newteam->manager_id = $user->id;
        $newteam->logo = $logo_filename;
        $newteam->banner = $banner_filename;
        $newteam->save();
    }
}