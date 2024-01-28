@extends('layouts.app')

@section('content')
    <div class="container max-w-sm mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Edit Match</h1>

        <form action="{{ route('admin.matches.update', $match->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="team1_id" class="block text-sm font-medium text-gray-700">Home Team</label>
                <select name="team1_id" id="team1_id" class="mt-1 p-2 border rounded-md w-full">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id == $match->team1_id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="team2_id" class="block text-sm font-medium text-gray-700">Guest Team</label>
                <select name="team2_id" id="team2_id" class="mt-1 p-2 border rounded-md w-full">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ $team->id == $match->team2_id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="date_time" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="text" name="date_time" id="date_time" class="mt-1 p-2 border rounded-md w-full" placeholder="mm/dd/yyyy" value="{{ $match->date_time->format('m/d/Y') }}">
            </div>

            <div class="mb-4">
                <label for="result_team1" class="block text-sm font-medium text-gray-700">Result Home Team</label>
                <input type="text" name="result_team1" id="result_team1" class="mt-1 p-2 border rounded-md w-full" value="{{ $match->result_team1 }}">
            </div>

            <div class="mb-4">
                <label for="result_team2" class="block text-sm font-medium text-gray-700">Result Guest Team</label>
                <input type="text" name="result_team2" id="result_team2" class="mt-1 p-2 border rounded-md w-full" value="{{ $match->result_team2 }}">
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
            </div>
        </form>
    </div>
@endsection
