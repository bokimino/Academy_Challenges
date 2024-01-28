<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Models\FootballMatch;

class AdminController extends Controller
{
    public function index()
    {
        //
    }
    public function dashboard()
    {
        
        return view('admin.dashboard');
    }

    public function indexTeams()
    {
        $teams = Team::all();
        return view('admin.teams.index', ['teams' => $teams]);
    }

    public function createTeam()
    {
        return view('admin.teams.create');
    }

    public function storeTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:teams|max:255',
            'year_of_foundation' => 'required|integer',
        ]);

        Team::create($request->all());

        return redirect()->route('admin.teams.index')->with('success', 'Team created successfully');
    }

    public function editTeam($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', ['team' => $team]);
    }

    public function updateTeam(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:teams|max:255',
            'year_of_foundation' => 'required|integer',
        ]);

        $team = Team::findOrFail($id);
        $team->update($request->all());

        return redirect()->route('admin.teams.index')->with('success', 'Team updated successfully');
    }

    public function destroyTeam($id)
{
    $team = Team::findOrFail($id);

    
    $team->players()->update(['team_id' => 0]);

    $team->delete();

    return redirect()->route('admin.teams.index')->with('success', 'Team deleted successfully');
}

    public function indexPlayers()
    {
        $teams = Team::all(); 
    
        $players = Player::all();
        return view('admin.players.index', ['players' => $players, 'teams' => $teams]);
    }

    public function createPlayer()
    {
        $teams = Team::all();
    
        return view('admin.players.create', ['teams' => $teams]);
    }

    public function storePlayer(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'surname' => 'required|max:255',
        'date_of_birth' => 'required|date_format:Y-m-d', 
        'team_id' => 'required|exists:teams,id', 
    ]);

    Player::create($request->all());

    return redirect()->route('admin.players.index')->with('success', 'Player created successfully');
}
    public function editPlayer($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::all();
        return view('admin.players.edit', ['player' => $player, 'teams' => $teams]);
    }

    public function updatePlayer(Request $request, $id)
{
    $request->validate([
        'name' => 'required|max:255',
        'surname' => 'required|max:255',
        'date_of_birth' => 'required|date',
        'team_id' => 'required|exists:teams,id',
    ]);

    $player = Player::findOrFail($id);
    $player->update($request->all());

   
    $teams = Team::all();

    return redirect()->route('admin.players.index')->with(['success' => 'Player updated successfully', 'teams' => $teams]);
}

    public function destroyPlayer($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect()->route('admin.players.index')->with('success', 'Player deleted successfully');
    }

    public function indexMatches()
    {
        $matches = FootballMatch::all();
        return view('admin.matches.index', ['matches' => $matches]);
    }
    
    public function createMatch()
{
    $teams = Team::all(); 
    return view('admin.matches.create', ['teams' => $teams]);
}

    public function storeMatch(Request $request)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'date_time' => 'required|date',
            'result_team1' => 'nullable|integer',
            'result_team2' => 'nullable|integer',
            
        ]);

        FootballMatch::create($request->all());

        return redirect()->route('admin.matches.index')->with('success', 'Match created successfully');
    }

    public function editMatch($id)
{
    $match = FootballMatch::findOrFail($id);
    $teams = Team::all(); 
    return view('admin.matches.edit', ['match' => $match, 'teams' => $teams]);
}

    public function updateMatch(Request $request, $id)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'date_time' => 'required|date',
            'result_team1' => 'nullable|integer',
            'result_team2' => 'nullable|integer',
        ]);

        $match = FootballMatch::findOrFail($id);
        $match->update($request->all());

        return redirect()->route('admin.matches.index')->with('success', 'Match updated successfully');
    }

    public function destroyMatch($id)
    {
        $match = FootballMatch::findOrFail($id);
        $match->delete();

        return redirect()->route('admin.matches.index')->with('success', 'Match deleted successfully');
    }
    public function dashboardAdmin()
{
    
    $totalTeams = Team::count();
    $totalPlayers = Player::count();
    $totalMatches = FootballMatch::count();
    $latestMatches = FootballMatch::latest()->take(5)->get();

    
    return view('admin.dashboard', [
        'totalTeams' => $totalTeams,
        'totalPlayers' => $totalPlayers,
        'totalMatches' => $totalMatches,
        'latestMatches' => $latestMatches,
    ]);
}

}
