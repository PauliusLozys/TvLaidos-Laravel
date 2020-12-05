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

<form action="{{ route('sezonai.update', $sezonas) }}" method="POST" class="form">
    @csrf
    {{ method_field('PUT') }}
    <div class="inp">
        <label >Sezono numeris: </label>
        <input class="textinput" type="number" name="sezonoNr" value="{{ $sezonas->sezono_nr }}"> <br><br>
    </div>
    
    <div class="inp">
        <label >Sezono įvertinimas: </label>
        <input class="textinput" type="number" step="0.01" name="sezonoIvertis" value="{{ $sezonas->sezono_ivertinimas }}"> <br><br>
    </div>
    
    <div class="inp">
        <label >Epizodų skaičius: </label>
        <input class="textinput" type="number" name="epizoduNr" value="{{ $sezonas->epizodu_sk }}"> <br><br>
    </div>
    
    <div class="inp">
        <label >Pasirinkite TV laidą: </label>
        <select class="dropdownlist" name="tvLaida" id="tvLaida">
            @foreach($tvLaidos as $tv)
            <option value="{{ $tv->id }}" @if($sezonas->fk_tv_laida == $tv->id) selected="selected" @endif>{{ $tv->pavadinimas }}</option>
            @endforeach
        </select><br><br>
    </div>
    
    <center>
        <input class="submit" type="submit" value="Pridėti">
    </center>
        
    </form>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
    