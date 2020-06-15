@extends('frontEnd.layouts.app')

{{-- Powred by Elmarzougui Abdelghafour at HayMacProduction--}}

@section('content')

   @include('frontEnd.Fnbp.topCover')
   
   @include('frontEnd.Fnbp.section-how')
   {{-- @include('frontEnd.Fnbp.section-process')
   @include('frontEnd.Fnbp.section-promo')
   @include('frontEnd.Fnbp.section-clients')
   @include('frontEnd.Fnbp.section-whyUs')
   @include('frontEnd.Fnbp.section-support')
   @include('frontEnd.Fnbp.section-testimonial') --}}

   @include('frontEnd.Fnbp.section-contact')

@endsection


@section('MuScript')
 <script src="{{asset('frontEnd/js/pjs.js')}}"></script>   
@endsection