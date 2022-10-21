<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @if (env('IS_DEMO'))
      <x-demo-metas></x-demo-metas>
  @endif
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/assets/img/apple-icon.png') }}" />
  <link rel="icon"type="image/png" href="{{ url('/assets/img/favicon.png') }}" />
  <title>
    Digitak System
  </title>
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link rel="stylesheet" href="{{ url('/assets/css/nucleo-icons.css') }}" />
  <link rel="stylesheet" href="{{ url('/assets/css/nucleo-svg.css') }}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('/assets/css/nucleo-svg.css') }}" />
  <!-- CSS Files -->
  <link id="pagestyle" rel="stylesheet" href="{{ url('/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" />
</head>

  @auth
    @yield('auth')
  @endauth
  @guest
    @yield('guest')
  @endguest

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  -->
  @stack('dashboard')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
