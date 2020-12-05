@extends('layouts.app')

@section('active-sez')
    class="active"
@endsection

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Sezono nr</th>
            <th>Sezono įvertinimas</th>
            <th>Epizodu skaičius</th>
            <th>Tv Laida ID</th>
            <th>Veiksmai</th>

        </tr>
        </thead>

        <tbody>
        @foreach($all_sezonai as $data )
            <tr>
                <td colspan="">{{$data->id}}</td>
                <td>{{$data->sezono_nr}}</td>
                <td>{{$data->sezono_ivertinimas}}</td>
                <td>{{$data->epizodu_sk}}</td>
                <td>{{$data->tvLaida->pavadinimas}}</td>
                <td>
                    <center>
                        <a href="{{ route('sezonai.edit', $data) }}">
                            <button type="button" class="btn btn-primary">Redaguoti</button>
                        </a>
                        <form action="{{ route('sezonai.destroy', $data) }}" method="POST" class="float-left">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-warning">Šalinti</button>
                        </form>
                    </center>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('footer')
    <a href="{{ route('sezonai.create') }}" style="float: right">
        <button type="button" class="btn btn-primary">Pridėti nauja sezoną</button>
    </a>
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
