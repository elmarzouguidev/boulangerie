@extends('frontEnd.layouts.app')

{{-- Powred by Elmarzougui Abdelghafour at HayMacProduction--}}

@section('content')

   @include('frontEnd.Bakery.Single.main')
 
@endsection

@section('MuStyle')
 <link type="text/css" rel="stylesheet" href="{{asset('frontEnd/css/shop.css')}}">
@endsection

@section('MuScript')
 <script src="{{asset('frontEnd/js/shop.js')}}"></script>   
@endsection