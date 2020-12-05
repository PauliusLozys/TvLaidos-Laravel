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
            <th>Veiksmai</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_veikejai as $data )

            <tr>
                <td colspan="">{{$data->id }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->tvLaida->pavadinimas}}</td>
                <td>{{$data->aktorius->vardas}} {{$data->aktorius->pavarde}}</td>
                <td>
                    <center>
                        <a href="#"><button>Redaguoti</button></a>
                        <a href="#"><button>Šalinti</button></a>
                    </center>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection

