@extends('layouts.app')

@section('active-kur')
    class="active"
@endsection

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Rolė</th>
            <th>Lytis</th>
            <th>Tv Laida</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_kurejai as $data )

            <tr>
                <td colspan="">{{$data->id }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->pavarde}}</td>
                <td>{{$data->role}}</td>
                <td>{{$data->lytis ? 'Moteris' : 'Vyras'}}</td>
                <td>{{$data->tvLaida->pavadinimas}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
