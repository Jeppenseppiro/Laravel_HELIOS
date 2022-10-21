<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LEYECO V HELIOS | @yield('title')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet" />

  @vite('resources/css/app.css')
  @yield('head')

</head>

<body class="font-poppins antialiased">


  <div id="{{ Route::is('map*') ? '' : 'app' }}"
    class="relative mx-auto pb-6 min-h-screen bg-gray-100 dark:bg-gray-600">
    @include('layouts.nav')

    <main class="pt-6 {{ Route::is('map*') ? '' : 'max-w-7xl' }} mx-auto px-4 sm:px-6 lg:px-8">
      @include('web.includes.error_message')

      @yield('content')
    </main>
  </div>

  {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  @vite('resources/js/app.js')
  @yield('script')
</body>

</html>
