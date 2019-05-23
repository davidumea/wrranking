@extends('layout')

@section('title')
    
    Tournament

@endsection

@section('content')

<table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Name</th>
                <th scope="col">TP</th>
                <th scope="col">K/D Ratio</th>
                <th scope="col">Win Ratio</th>
            </tr>
        </thead>
        <tbody>
            <!--Loopar genom tabellen och skriver ut datan från databasen på rätt plats. -->
            @foreach ($stats as $stat)
                <tr>
                    <th>{{ $stat->id }}</th>
                    <td>{{ $stat->name }}</td>
                    <td>{{ $stat->experience }}</td>
                    <td>{{ $stat->kdRatio }}</td>
                    <td>{{ $stat->winRatio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    

@endsection