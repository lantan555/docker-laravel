<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <div class="wrapper bg-white">
    <div class="page relative" >
      <x-header />
      <main class="">
        @yield('content')
      </main>
      <x-footer />
    </div>
  </div>
  @livewireScripts
</body>
</html>
