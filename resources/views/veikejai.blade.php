@extends('layouts.app')

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Vardas</th>
            <th>Tv Laida</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_veikejai as $data )

            <tr>
                <td colspan="">{{$data->id_VEIKEJAS }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->fk_TV_LAIDAid_TV_LAIDA }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
