@extends('layouts.app')

@section('active-veik')
    class="active"
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<center>
    <form action="{{ route('veikejai.update', $veikejas) }}" method="POST" style="background-color: antiquewhite">
        @csrf
        {{ method_field('PUT') }}
        <label >Vardas: </label>
        <input type="text" name="vardas" value="{{ $veikejas->vardas }}"> <br><br>
        
        <label >Pasirinkite TV laidą: </label>
        <select name="tvLaida" id="tvLaida">

            @foreach($tvLaidos as $tv)
                <option value="{{ $tv->id }}" @if($veikejas->fk_tv_laida == $tv->id) selected="selected" @endif>{{ $tv->pavadinimas }}</option>
            @endforeach

        </select><br><br>

        <label >Pasirinkite aktorių: </label>
        <select name="aktorius" id="aktorius">

            @foreach($aktoriai as $aktorius)
                <option value="{{ $aktorius->id }}" @if($veikejas->fk_aktorius == $aktorius->id) selected="selected" @endif>{{ $aktorius->vardas }} {{ $aktorius->pavarde  }}</option>
            @endforeach

        </select><br><br>


        <input type="submit" value="Pridėti">
        
    </form>
</center>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
