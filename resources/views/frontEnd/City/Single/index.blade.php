@extends('frontEnd.layouts.appMap')

{{-- Powred by Elmarzougui Abdelghafour at HayMacProduction--}}

@section('content')

   @include('frontEnd.City.Single.map')

   @include('frontEnd.City.Single.hiddenFilter')
   
   @include('frontEnd.City.Single.main')

@endsection