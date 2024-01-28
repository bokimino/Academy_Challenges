@extends('layouts.app')

@section('content')
 

<div class="container mx-auto mt-8 w-4/6 text-center">
        <h1 class="text-2xl font-bold mb-4">Matches</h1>

        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Team 1</th>
                    <th class="py-2 px-4 border-b">Team 2</th>
                    <th class="py-2 px-4 border-b">Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matches as $match)
                    <tr class="hover:bg-gray-100 text-center">
                        <td class="py-2 px-4 border-b">
                            {{ $match->team1->name }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ $match->team2->name }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            Result: {{ $match->result_team1 }}-{{ $match->result_team2 }} - 
                            Date: {{ $match->date_time->format('Y-m-d H:i') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
    

     
      
@endsection




