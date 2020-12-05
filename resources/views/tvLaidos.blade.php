@extends('layouts.app')

@section('active-tv')
    class="active"
@endsection

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Pavadinimas</th>
            <th>Trukmė</th>
            <th>Žiūrovų įvertinimas</th>
            <th>Aprašymas</th>
            <th>Veiksmai</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_tv_laidos as $data )

            <tr>
                <td colspan="">{{$data->id}}</td>
                <td>{{$data->pavadinimas}}</td>
                <td>{{$data->trukme}}</td>
                <td>{{$data->ziurovu_ivertinimas}}</td>
                <td>{{$data->aprasymas}}</td>
                <td>
                    <center>
                        <a href="{{ route('tvLaidos.edit', $data) }}">
                            <button type="button" class="btn btn-primary">Redaguoti</button>
                        </a>
                        <form action="{{ route('tvLaidos.destroy', $data) }}" method="POST" class="float-left">
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
    <a href="{{ route('tvLaidos.create') }}" style="float: right">
        <button type="button" class="btn btn-primary">Pridėti nauja TV laida</button>
    </a>
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
