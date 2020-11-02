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
            <td colspan="">{{$data->id_AKTORIUS }}</td>
            <td>{{$data->vardas}}</td>
            <td>{{$data->pavarde}}</td>
            <td>{{$data->lytis}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
