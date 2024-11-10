<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.css')}}>
    <title>@yield('title')</title>
</head>
<body>
    {{-- navbar --}}
    

    {{-- content --}}
    <div>
    @yield('content')
    </div>
    
    {{-- footer --}}
    <p>Footer</p>
</body>
<script src={{asset('bootstrap/css/bootstrap.css')}}></script>
</html>