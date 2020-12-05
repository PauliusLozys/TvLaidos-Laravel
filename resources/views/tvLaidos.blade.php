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
