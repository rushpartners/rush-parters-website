@extends('_layouts.master')

@section('body')
    @include('_partials._home.hero', ['error' => true])
    @include('_partials._home.brands')
    @include('_partials._home.about')
    @include('_partials._home.contact')
    @include('_partials._home.footer')
@endsection
