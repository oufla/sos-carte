@extends('layouts.app')
@section('title')
    Accueil
@endsection
@section('content')
    <!-- loader -->
    @include('panels.loader')
    <!-- * loader -->

    <!-- App Header -->
    @include('panels.header')
    <!-- * App Header -->

    <!-- App Capsule -->
    @livewire('accueil.accueil-index')
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    @include('panels.bottom-menu')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    {{-- @include('panels.sidebar') --}}
    <!-- * App Sidebar -->

    <!-- Add to Home Action -->
    @include('panels.add-to-home')
    <!-- * Add to Home Action  -->
@endsection
