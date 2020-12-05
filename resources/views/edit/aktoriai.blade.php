@extends('layouts.app')

@section('active-akt')
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
    <form action="{{ route('aktoriai.update', $aktorius) }}" method="POST" style="background-color: antiquewhite">
        @csrf
        {{ method_field('PUT') }}
        <label >Vardas: </label>
        <input type="text" name="vardas" value="{{ $aktorius->vardas }}"> <br><br>
        
        <label >Pavardė:</label>
        <input type="text" name="pavarde" value="{{ $aktorius->pavarde }}"> <br><br>

        <label >Lytis:</label> <br>
        <input type="radio" id="vyras" name="lytis" value="0" @if($aktorius->lytis == '0') checked="checked" @endif>
        <label for="vyras">Vyras</label><br>
        <input type="radio" id="moteris" name="lytis" value="1" @if($aktorius->lytis == '1') checked="checked" @endif>
        <label for="moteris">Moteris</label><br><br>

        <input type="submit" value="Pridėti">
        
    </form>
</center>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
