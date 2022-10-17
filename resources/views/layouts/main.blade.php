@extends('layouts.app')

@section('auth')
  
@include('layouts.navbars.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    @include('layouts.navbars.nav')
    <div class="container-fluid py-3">
        @yield('content')
        @include('layouts.footers.footer')
    </div>
</main>

{{-- @include('components.fixed-plugin') --}}

@endsection