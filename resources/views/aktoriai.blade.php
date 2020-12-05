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
            <th>Veiksmai</th>

        </tr>
        </thead>

        <tbody>
        @foreach($all_aktoriai as $data )

            <tr>
                <td colspan="">{{$data->id }}</td>
                <td>{{$data->vardas}}</td>
                <td>{{$data->pavarde}}</td>
                <td>{{$data->lytis ? 'Moteris' : 'Vyras'}}</td>
                <td>
                    <center>
                        <a href="{{ route('aktoriai.edit', $data) }}">
                            <button type="button" class="btn btn-primary">Redaguoti</button>
                        </a>
                        <form action="{{ route('aktoriai.destroy', $data) }}" method="POST" class="float-left">
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

    <div style="float: right;">
        {{$all_aktoriai->links('vendor.pagination.simple-tailwind')}}
    </div>
@endsection

@section('footer')
    <a href="{{ route('aktoriai.create') }}" style="float: right">
        <button type="button" class="btn btn-primary">Pridėti naują aktorių</button>
    </a>
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
