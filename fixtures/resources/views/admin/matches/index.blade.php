@extends('layouts.app')

@section('content')
    <div class="container w-4/6 mx-auto mt-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Matches</h1>
            <a href="{{ route('admin.matches.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Match</a>
        </div>

        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Team 1</th>
                    <th class="py-2 px-4 border-b">Team 2</th>
                    <th class="py-2 px-4 border-b">Result</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matches as $match)
                    <tr class="hover:bg-gray-100 text-center">
                        <td class="py-2 px-4 border-b">{{ $match->team1->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $match->team2->name }}</td>
                        <td class="py-2 px-4 border-b">
                            Result: {{ $match->result_team1 }}-{{ $match->result_team2 }} - 
                            Date: {{ $match->date_time->format('Y-m-d H:i') }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('admin.matches.edit', $match->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                            <form action="{{ route('admin.matches.destroy', $match->id) }}" method="post" class="inline">
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
