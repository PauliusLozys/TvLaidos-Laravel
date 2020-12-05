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

<form action="{{ route('veikejai.store') }}" method="POST" class="form">
    @csrf
    <div class="inp">
        <label >Vardas: </label>
        <input class="textinput" type="text" name="vardas" value="{{ old('vardas') }}"> <br><br>
    </div>
    
    <label id="leb">Pasirinkite TV laidą: </label>
    <select class="dropdownlist" name="tvLaida" id="tvLaida">
        
        @foreach($tvLaidos as $tv)
        <option value="{{ $tv->id }}" @if(old('tvLaida') == $tv->id) selected="selected" @endif>{{ $tv->pavadinimas }}</option>
        @endforeach
        
    </select><br><br>
    
    <label id="leb">Pasirinkite aktorių: </label>
    <select class="dropdownlist" name="aktorius" id="aktorius">
        
        @foreach($aktoriai as $aktorius)
        <option value="{{ $aktorius->id }}" @if(old('aktorius') == $aktorius->id) selected="selected" @endif>{{ $aktorius->vardas }} {{ $aktorius->pavarde  }}</option>
        @endforeach
        
    </select><br><br>
    
    
<center>
    <input class="submit" type="submit" value="Pridėti">
</center>
    
</form>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
