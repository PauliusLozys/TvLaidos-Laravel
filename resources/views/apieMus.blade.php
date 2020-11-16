@extends('layouts.app')

@section('banner')
    <a href="https://getfedora.org/">
        <img src="images/ubuntu.jpg"  alt="Bill Gates Supports Ubuntu" style="width: 900px; height: 250px;">
    </a>
@endsection

@section('active-apie')
    class="active"
@endsection


@section('contentRightParams')
    id="apie"
@endsection

@section('content')
    <h1 style="margin-left: 10%; margin-top: 1px">Šį puslapį sukūrė: Paulius Ložys  :^)</h1>
@endsection

@section('footer')
Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
