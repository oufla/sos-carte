@extends('layouts.app')
@section('title') Chargement @endsection
@section('content')
    <!-- loader -->
    @include('panels.loader')
    <!-- * loader -->

    <!-- App Header -->
    {{-- @include('panels.header') --}}
    <!-- * App Header -->

    <!-- App Capsule -->
    @livewire('chargement.chargement-index')
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    {{-- @include('panels.bottom-menu') --}}
    <!-- * App Bottom Menu -->

    <!-- Add to Home Action -->
    {{-- @include('panels.add-to-home') --}}
    <!-- * Add to Home Action  -->
@endsection
