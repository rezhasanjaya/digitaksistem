@extends('layouts.app')

@section('auth')


    
            @include('layouts.navbars.auth.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-3">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>

        {{-- @include('components.fixed-plugin') --}}
  

    

@endsection