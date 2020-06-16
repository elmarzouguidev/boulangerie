@extends('frontEnd.layouts.app')

{{-- Powred by Elmarzougui Abdelghafour at HayMacProduction--}}

@section('content')

   @include('frontEnd.Home.map')
   @include('frontEnd.Home.section-a')
   @include('frontEnd.Home.section-b')
   @include('frontEnd.Home.section-i')
   @include('frontEnd.Home.blog')

   {{-- @include('frontEnd.Home.section-c') --}}
   {{-- @include('frontEnd.Home.section-d') --}}
   {{-- @include('frontEnd.Home.section-f') --}}


   @include('frontEnd.Home.section-g')
   {{-- @include('frontEnd.Home.section-h') --}}

   @include('frontEnd.Home.section-e')
 

@endsection