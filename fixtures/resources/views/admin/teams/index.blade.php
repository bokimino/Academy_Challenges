@extends('layouts.app')

@section('content')

<div class="container w-4/6 mx-auto mt-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold"> Teams</h1>
        <a href="{{ route('admin.teams.create') }}"
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Team</a>
    </div>

    <table class="min-w-full bg-white border border-gray-300 rounded text-center">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Year Founded</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr class="hover:bg-gray-100 text-center">
                <td class="py-2 px-4 border-b">{{ $team->name }}</td>
                <td class="py-2 px-4 border-b">{{ $team->year_of_foundation }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.teams.edit', $team->id) }}"
                        class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

