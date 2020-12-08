@extends('layouts.app')

@section('active-tv')
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
    <form action="{{ route('tvLaidos.update', $tvLaida) }}" method="POST" class="form">
        @csrf
        {{ method_field('PUT') }}
        <div class="inp">
            <label >Pavadinimas: </label>
            <input class="textinput" type="text" name="pavadinimas" value="{{ $tvLaida->pavadinimas }}"> <br><br>
        </div>

        <div class="inp">
            <label >Aprašymas:</label>
            <textarea id="aprs" type="text" name="aprasymas">{{ $tvLaida->aprasymas }}</textarea><br><br>
        </div>
            
        <div class="inp">
            <label >Trukmė:</label>    
            <input class="textinput" type="number" name="trukme" value="{{ $tvLaida->trukme }}"> <br><br>
        </div>

        <div class="inp">

            <label >Žiurovų įvertinimas:</label>
            <input class="textinput" type="number" step="0.01" name="ivertinimas" value="{{ $tvLaida->ziurovu_ivertinimas }}"> <br><br><br>
        </div>
        
        
        <center>
            
            <label id="leb">Pasirinkite kūrėja: </label><br>
            <select class="multiple" name="kurejai[]" multiple id="kurejai">
                
                @foreach($kurejai as $kurejas)
                <option value="{{ $kurejas->id }}" @if(in_array($kurejas->id, $kuria)) selected="selected" @endif>{{ $kurejas->vardas }} {{ $kurejas->pavarde }}</option>
                @endforeach
                
            </select><br><br>
            <input class="submit" type="submit" value="Pridėti" >
        </center>

        
    </form>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection