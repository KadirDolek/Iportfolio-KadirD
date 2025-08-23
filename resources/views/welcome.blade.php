@extends('frontend.layout')

@section('title', 'Home')

@section('content')

<section >

         @include('frontend.about')
         @include('frontend.portfolio')
         @include('frontend.services')
         @include('frontend.contact')

       
</section>
<section >

       
</section>

@endsection
