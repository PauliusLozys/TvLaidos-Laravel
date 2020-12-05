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

<center>
    <form action="{{ route('kurejai.update', $kurejas) }}" method="POST" style="background-color: antiquewhite">
        @csrf
        {{ method_field('PUT') }}
        <label >Vardas: </label>
        <input type="text" name="vardas" value="{{ $kurejas->vardas }}"> <br><br>
        
        <label >Pavardė:</label>
        <input type="text" name="pavarde" value="{{ $kurejas->pavarde }}"> <br><br>

        <label >Rolė:</label>
        <input type="text" name="role" value="{{ $kurejas->role }}"> <br><br>

        <label >Lytis:</label> <br>
        <input type="radio" id="vyras" name="lytis" value="0" @if($kurejas->lytis == '0') checked="checked" @endif>
        <label for="vyras">Vyras</label><br>
        <input type="radio" id="moteris" name="lytis" value="1" @if($kurejas->lytis == '1') checked="checked" @endif>
        <label for="moteris">Moteris</label><br><br>

        <label >Pasirinkite TV laidą: </label><br>
       
        <select name="tvLaida[]" multiple id="tvLaida">

            @foreach($tvLaidos as $tv)
                <option value="{{ $tv->id }}" @if(in_array($tv->id, $kuria)) selected="selected" @endif>{{ $tv->pavadinimas }}</option>
            @endforeach

        </select><br><br>

        <input type="submit" value="Pridėti">
        
    </form>
</center>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection