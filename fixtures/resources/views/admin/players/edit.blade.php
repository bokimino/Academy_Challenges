@extends('layouts.app')
@section('content')
    <div class="container max-w-sm mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Edit Player</h1>

        <form action="{{ route('admin.players.update', $player->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $player->name) }}" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mb-4">
                <label for="surname" class="block text-sm font-medium text-gray-600">Surname</label>
                <input type="text" name="surname" id="surname" value="{{ old('surname', $player->surname) }}" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mb-4">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-600">Date of Birth (mm/dd/yyyy)</label>
                <input type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $player->date_of_birth->format('m/d/Y')) }}" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mb-4">
                <label for="team_id" class="block text-gray-700 text-sm font-bold mb-2">Team</label>
                <select name="team_id" id="team_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ old('team_id', $player->team_id) == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
            </div>
        </form>
    </div>
@endsection