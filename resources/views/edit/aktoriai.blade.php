@extends('layouts.app')

@section('active-akt')
    class="active"
@endsection

@section('content')
    
@endsection

@section('footer')
    Prisijungta: {{ date('Y-m-d H:i:s', session('time')) }} 
@endsection
