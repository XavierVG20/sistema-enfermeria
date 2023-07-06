<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('admin/node_modules/simplebar/dist/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('admin/css/examples.css') }}" rel="stylesheet">


   
</head>
