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
    <form action="{{ route('tvLaidos.update', $tvLaida) }}" method="POST" style="background-color: antiquewhite">
        @csrf
        {{ method_field('PUT') }}
        <label >Pavadinimas: </label>
        <input type="text" name="pavadinimas" value="{{ $tvLaida->pavadinimas }}"> <br><br>
        
        <label >Aprašymas:</label>
        <input type="text" name="aprasymas" value="{{ $tvLaida->aprasymas }}"> <br><br>

        <label >Trukmė:</label>
        <input type="number" name="trukme" value="{{ $tvLaida->trukme }}"> <br><br>

        <label >Žiurovų įvertinimas:</label>
        <input type="number" step="0.01" name="ivertinimas" value="{{ $tvLaida->ziurovu_ivertinimas }}"> <br><br>

        <label >Pasirinkite kūrėja: </label><br>
       
        <select name="kurejai[]" multiple id="kurejai">

            @foreach($kurejai as $kurejas)
                <option value="{{ $kurejas->id }}" @if(in_array($kurejas->id, $kuria)) selected="selected" @endif>{{ $kurejas->vardas }} {{ $kurejas->pavarde }}</option>
            @endforeach

        </select><br><br>

        <input type="submit" value="Pridėti">
        
    </form>
</center>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection