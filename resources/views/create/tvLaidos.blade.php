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

<center>
    <form action="{{ route('tvLaidos.store') }}" method="POST" style="background-color: antiquewhite">
        @csrf
        <label >Pavadinimas: </label>
        <input type="text" name="pavadinimas" value="{{ old('pavadinimas') }}"> <br><br>
        
        <label >Aprašymas:</label>
        <input type="text" name="aprasymas" value="{{ old('aprasymas') }}"> <br><br>

        <label >Trukmė:</label>
        <input type="number" name="trukme" value="{{ old('trukme') }}"> <br><br>

        <label >Žiurovų įvertinimas:</label>
        <input type="number" step="0.01" name="ivertinimas" value="{{ old('ivertinimas') }}"> <br><br>

        <label >Pasirinkite kūrėja: </label><br>
       
        <select name="kurejai[]" multiple id="kurejai">

            @foreach($kurejai as $kurejas)
                <option value="{{ $kurejas->id }}" @if(old('kurejai') == $kurejas->id) selected="selected" @endif>{{ $kurejas->vardas }} {{ $kurejas->pavarde }}</option>
            @endforeach

        </select><br><br>

        <input type="submit" value="Pridėti">
        
    </form>
</center>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection