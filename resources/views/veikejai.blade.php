@extends('layouts.app')

@section('active-veik')
    class="active"
@endsection

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Vardas</th>
            <th>Tv Laida</th>
            <th>Aktorius</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_veikejai as $data )

            <tr>
                <td colspan="">{{$data->id }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->tvLaida->pavadinimas}}</td>
                <td>{{$data->aktorius->vardas}} {{$data->aktorius->pavarde}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
