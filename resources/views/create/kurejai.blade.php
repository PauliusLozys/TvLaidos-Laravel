@extends('layouts.app')

@section('active-kur')
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

<form action="{{ route('kurejai.store') }}" method="POST" class="form">
    @csrf
    <div class='inp'>
        <label >Vardas: </label>
        <input class="textinput" type="text" name="vardas" value="{{ old('vardas') }}"> <br><br>
    </div>
    
    <div class='inp'>
        <label >Pavardė:</label>
        <input class="textinput" type="text" name="pavarde" value="{{ old('pavarde') }}"> <br><br>
    </div>
    
    <div class='inp'>
        <label >Rolė:</label>
        <input class="textinput" type="text" name="role" value="{{ old('role') }}"> <br><br>
    </div>
    
    <center>
    <div class='inp'>
        <label >Lytis:</label> <br>
        <input type="radio" id="vyras" name="lytis" value="0" @if(old('lytis') == '0') checked="checked" @endif>
        <label for="vyras">Vyras</label><br>
        <input type="radio" id="moteris" name="lytis" value="1" @if(old('lytis') == '1') checked="checked" @endif>
        <label for="moteris">Moteris</label><br><br>
    </div>

        <label id="leb">Pasirinkite TV laidą: </label><br>
       
        <select  class="multiple" name="tvLaida[]" multiple id="tvLaida">

            @foreach($tvLaidos as $tv)
                <option value="{{ $tv->id }}" @if(old('tvLaida') == $tv->id) selected="selected" @endif>{{ $tv->pavadinimas }}</option>
            @endforeach

        </select><br><br>

        <input class="submit" type="submit" value="Pridėti">
    </center>
        
    </form>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection