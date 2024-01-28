<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{

    public function matches()
    {
        $user = Auth::user();

        if ($user && $user->role === 'administrator') {
            
            $matches = FootballMatch::with(['team1', 'team2'])->get();
            return view('admin.matches.index', ['matches' => $matches]);
        } elseif ($user && $user->role === 'guest') {
            
            $matches = FootballMatch::with(['team1', 'team2'])->get();
            return view('guest.matches', ['matches' => $matches]);
        } else {
            abort(403, 'Unauthorized access');
        }
    }
}
