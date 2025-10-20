@extends('layouts.app')

@section('title', 'Fasticore Technologies')

@section('meta_description', 'Fasticore Technologies delivers AI-powered enterprise solutions. Transform challenges into measurable outcomes with cutting-edge strategy and seamless execution.')

@section('content')
    
    @include('components.hero')
    @include('components.services')
    @include('components.build')
    @include('components.solution')
    @include('components.about')
    @include('components.journey')
    @include('components.partners')
    @include('components.footer')
    
    
@endsection