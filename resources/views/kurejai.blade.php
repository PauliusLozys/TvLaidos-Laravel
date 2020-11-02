@extends('layouts.app')

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Rolė</th>
            <th>Lytis</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_kurejai as $data )

            <tr>
                <td colspan="">{{$data->id_KUREJAS }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->pavarde}}</td>
                <td>{{$data->role}}</td>
                <td>{{$data->lytis}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
