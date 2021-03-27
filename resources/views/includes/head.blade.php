
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   {{-- <meta http-equiv="refresh" content="2" /> --}}
   <title> @yield('pageTitle') </title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
  {{--  
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 --}}

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
