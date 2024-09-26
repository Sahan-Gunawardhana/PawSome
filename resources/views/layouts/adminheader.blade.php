<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center">
    <div class="text-center mb-6">
        <a href="{{ url('/home') }}"><img src="{{ asset('images/pawsome.png') }}" alt="" class="max-w-s max-h-28 mx-auto"></a>
    </div>
    <div class="text-center mb-6">
        <p class="text-4xl font-bold">
            Admin Dashboard
        </p>
    </div>
    @if(!Request::is('home'))
    <div class="nav-links p-5">
        <a class="link text-xl p-2" href="{{ url('admin/manageU') }}">Users</a>
        <a class="link text-xl p-2" href="{{ url('admin/manageO') }}">Orders</a>
        <a class="link text-xl p-2" href="{{ url('admin/manageP') }}">Products</a>
        <a class="link text-xl p-2" href="{{ url('admin/manageA') }}">Appointments</a>
    </div>
    @endif
    @yield('content')
</body>

</html>