<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0"> --}}
    <title>Dashboard</title>
    <link rel="icon" href="/img/favicon.png">

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/"> --}}

    

    

{{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
{{-- <script src="/js/jquery.js"></script> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-bs5.min.css"> --}}

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/css/style.css">
{{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
<script src="/js/jquery.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>


    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    


<div class="container-fluid bg-body-tertiary">
  <div class="row align-items-start justify-content-end">
    
      @include('dashboard.layouts.sidebar')
      
    <div class="col-sm">
      @include('dashboard.layouts.header')
      <main>
          @yield('container')
      </main>
    </div>
</div>

      <script src="/js/bootstrap.bundle.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <script src="/js/dashboard.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>
