<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
      @include('includes.head')
   </head>

   <body lass="hold-transition sidebar-mini layout-fixed">

      @include('includes.header')
      @include('includes.modalForm')
      @include('includes.leftside')

      @yield('content')

      @include('includes.footer')
      
   </body>
</html>