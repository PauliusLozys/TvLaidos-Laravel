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


    <form action="{{ route('tvLaidos.store') }}" method="POST" class="form">
        @csrf
        <div  class="inp">

            <label >Pavadinimas: </label>
            <input class="textinput" type="text" name="pavadinimas" value="{{ old('pavadinimas') }}"> <br><br>
        </div>
        
        <div  class="inp">
            <label >Aprašymas:</label>
            <textarea id="aprs" type="text" name="aprasymas">{{ old('aprasymas') }}</textarea><br><br>
        </div>

        <div  class="inp">

            <label >Trukmė:</label>
            <input class="textinput" type="number" name="trukme" value="{{ old('trukme') }}"> <br><br>
        </div>

        <div  class="inp">

            <label >Žiurovų įvertinimas:</label>
            <input class="textinput" type="number" step="0.01" name="ivertinimas" value="{{ old('ivertinimas') }}"> <br><br>
        </div>
            <center>
            <label id="leb">Pasirinkite kūrėja: </label><br>
       
            <select class="multiple" name="kurejai[]" multiple id="kurejai">

                @foreach($kurejai as $kurejas)
                    <option value="{{ $kurejas->id }}" @if(old('kurejai') == $kurejas->id) selected="selected" @endif>{{ $kurejas->vardas }} {{ $kurejas->pavarde }}</option>
                @endforeach

            </select><br><br>
            <input class="submit" type="submit" value="Pridėti">
        </center>
        
        
    </form>

@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection