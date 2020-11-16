@extends('layouts.app')

@section('active-akt')
    class="active"
@endsection

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Lytis</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_aktoriai as $data )

            <tr>
                <td colspan="">{{$data->id }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->pavarde}}</td>
                <td>{{$data->lytis ? 'Moteris' : 'Vyras'}}</td>
            </tr>
            
        @endforeach
        </tbody>
    </table>

    <div style="float: right;">
        {{$all_aktoriai->links('vendor.pagination.simple-tailwind')}}
    </div>
@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
