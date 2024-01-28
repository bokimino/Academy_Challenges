@extends('layouts.app')

@section('content')

    <div class="container w-4/6 mx-auto mt-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold"> Players</h1>
            <a href="{{ route('admin.players.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Player</a>
        </div>

        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Date of Birth</th>
                    <th class="py-2 px-4 border-b">Team</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
                    <tr class="hover:bg-gray-100 text-center">
                        
                        <td class="py-2 px-4 border-b">{{ $player->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $player->date_of_birth->format('Y-m-d') }}</td>
                        <td class="py-2 px-4 border-b">{{ optional($player->team)->name }}</td>

                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('admin.players.edit', $player->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                            <form action="{{ route('admin.players.destroy', $player->id) }}" method="post" class="inline">
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
