@extends('layouts.app')

@section('active-kur')
    class="active"
@endsection

@section('content')
    <table width="100%">
        <thead>
        <tr style="background-color: #aaddb6">
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Rolė</th>
            <th>Lytis</th>
            <th>Tv Laida</th>
            <th>Veiksmai</th>
        </tr>
        </thead>

        <tbody>
        @foreach($all_kurejai as $data )

            <tr>
                <td colspan="">{{$data->id }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->pavarde}}</td>
                <td>{{$data->role}}</td>
                <td>{{$data->lytis ? 'Moteris' : 'Vyras'}}</td>
                <td>
                    @foreach($data->tvLaidos as $tv)
                        {{ $tv->pavadinimas }} <br>
                    @endforeach
                </td>
                <td>
                    <center>
                        <a href="{{ route('kurejai.edit', $data) }}">
                            <button type="button" class="btn btn-primary">Redaguoti</button>
                        </a>
                        <form action="{{ route('kurejai.destroy', $data) }}" method="POST" class="float-left">
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
    <a href="{{ route('kurejai.create') }}" style="float: right">
        <button type="button" class="btn btn-primary">Pridėti nauja kurėja</button>
    </a>
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
