@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Admin Dashboard</h2>

        
        <p>Total Matches: {{ $totalMatches }}</p>

        <h3>Latest Matches</h3>
        <ul>
            @foreach($latestMatches as $match)
                <li>{{ $match->team1->name }} vs {{ $match->team2->name }} - Result: {{ $match->result_team1 }}-{{ $match->result_team2 }}</li>
            @endforeach
        </ul>

        <!-- Admin Actions -->
        <div class="admin-actions">
            <a href="{{ route('admin.teams.index') }}">Manage Teams</a>
            <a href="{{ route('admin.players.index') }}">Manage Players</a>
            <a href="{{ route('admin.matches.index') }}">Manage Matches</a>
        </div>
    </div>
@endsection