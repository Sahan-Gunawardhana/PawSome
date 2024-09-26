@extends('layouts.adminheader')
@section('content')

<!-- admin home page -->
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col items-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 sm:gap-20 mb-12">
            <div class="flex flex-col items-center">
                <a href="{{ url('admin/manageU') }}" class="flex flex-col items-center bg-teal-300/55 shadow-lg rounded-lg overflow-hidden h-64 w-64 sm:h-80 sm:w-80">
                    <div class="flex-1 flex justify-center items-center">
                        <img src="{{ asset('images/manage users.png') }}" alt="Manage Users Image" class="w-full h-32 sm:h-48 object-cover">
                    </div>
                </a>
                <h3 class="text-lg sm:text-xl font-semibold text-center mt-4">Manage Users</h3>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('admin/manageO') }}" class="flex flex-col items-center bg-teal-300/55 shadow-lg rounded-lg overflow-hidden h-64 w-64 sm:h-80 sm:w-80">
                    <div class="flex-1 flex justify-center items-center">
                        <img src="{{ asset('images/manage orders.png') }}" alt="Manage Orders Image" class="w-full h-32 sm:h-48 object-cover">
                    </div>
                </a>
                <h3 class="text-lg sm:text-xl font-semibold text-center mt-4">Manage Orders</h3>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('admin/manageP') }}" class="flex flex-col items-center bg-teal-300/55 shadow-lg rounded-lg overflow-hidden h-64 w-64 sm:h-80 sm:w-80">
                    <div class="flex-1 flex justify-center items-center">
                        <img src="{{ asset('images/manage products.png') }}" alt="Manage Products Image" class="w-full h-32 sm:h-48 object-cover">
                    </div>
                </a>
                <h3 class="text-lg sm:text-xl font-semibold text-center mt-4">Manage Products</h3>
            </div>
            <div class="flex flex-col items-center">
                <a href="{{ url('admin/manageA') }}" class="flex flex-col items-center bg-teal-300/55 shadow-lg rounded-lg overflow-hidden h-64 w-64 sm:h-80 sm:w-80">
                    <div class="flex-1 flex justify-center items-center">
                        <img src="{{ asset('images/manage services.png') }}" alt="Manage Appointments Image" class="w-full h-32 sm:h-48 object-cover">
                    </div>
                </a>
                <h3 class="text-lg sm:text-xl font-semibold text-center mt-4">Manage Appointments</h3>
            </div>
        </div>
        <div class="flex justify-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection