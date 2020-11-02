@extends('layouts.app')

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Sezono nr</th>
            <th>Sezono įvertinimas</th>
            <th>Epizodu skaičius</th>
            <th>Tv Laida ID</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_sezonai as $data )
            <tr>
                <td colspan="">{{$data->id_SEZONAS}}</td>
                <td>{{$data->sezono_nr}}</td>
                <td>{{$data->sezono_ivertinimas}}</td>
                <td>{{$data->epizodu_sk}}</td>
                <td>{{$data->fk_TV_LAIDAid_TV_LAIDA}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
