<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link href={{asset('assets/images/favicon.png" rel="icon" type="image/png')}}>
           <!-- Basic Page Needs
           ================================================== -->
           <title>{{ config('app.name', 'Samahgram') }}</title>
           <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Instello - Sharing Photos platform HTML Template">
        <!-- icons
           ================================================== -->
        <link rel="stylesheet" href={{asset('assets/css/icons.css')}}>
        <!-- CSS
           ================================================== -->
        <link rel="stylesheet" href={{asset('assets/css/uikit.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
        <link rel="stylesheet" href={{asset('assets/css/tailwind.css')}}>
     </head>

@yield('content')

</body>


