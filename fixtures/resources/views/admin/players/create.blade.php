@extends('layouts.app')

@section('content')
    <div class="container max-w-sm mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Create New Player</h1>

        <form action="{{ route('admin.players.store') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mb-4">
                <label for="surname" class="block text-sm font-medium text-gray-600">Surname</label>
                <input type="text" name="surname" id="surname" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mb-4">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-600">Date of Birth (Y-m-d)</label>
                <input type="text" name="date_of_birth" id="date_of_birth" class="mt-1 p-2 border w-full rounded-md">
            </div>

           
            <div class="mb-4">
    <label for="team_id" class="block text-gray-700 text-sm font-bold mb-2">Team</label>
    <select name="team_id" id="team_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @foreach($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
        
    </select>
</div>

            <div class="mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save</button>
            </div>
        </form>
    </div>
@endsection