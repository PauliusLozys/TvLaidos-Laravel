@extends('layouts.app')

@section('active-sez')
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
    <form action="{{ route('sezonai.update', $sezonas) }}" method="POST" style="background-color: antiquewhite">
        @csrf
        {{ method_field('PUT') }}
        <label >Sezono numeris: </label>
        <input type="number" name="sezonoNr" value="{{ $sezonas->sezono_nr }}"> <br><br>
        
        <label >Sezono įvertinimas: </label>
        <input type="number" step="0.01" name="sezonoIvertis" value="{{ $sezonas->sezono_ivertinimas }}"> <br><br>

        <label >Epizodų skaičius: </label>
        <input type="number" name="epizoduNr" value="{{ $sezonas->epizodu_sk }}"> <br><br>

        <label >Pasirinkite TV laidą: </label>
        <select name="tvLaida" id="tvLaida">

            @foreach($tvLaidos as $tv)
                <option value="{{ $tv->id }}" @if($sezonas->fk_tv_laida == $tv->id) selected="selected" @endif>{{ $tv->pavadinimas }}</option>
            @endforeach

        </select><br><br>

        <input type="submit" value="Pridėti">
        
    </form>
</center>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
    