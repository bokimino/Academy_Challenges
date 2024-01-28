@extends('layouts.app')

@section('content')
    <div class="container max-w-sm mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Edit Team</h1>

        <form action="{{ route('admin.teams.update', $team->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mb-4">
                <label for="year_of_foundation" class="block text-sm font-medium text-gray-600">Year of Foundation</label>
                <input type="text" name="year_of_foundation" id="year_of_foundation" value="{{ old('year_of_foundation', $team->year_of_foundation) }}" class="mt-1 p-2 border w-full rounded-md">
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
            </div>
        </form>
    </div>
@endsection
