@extends('layouts.landing')

@section('content')

<div class="container mx-auto px-4">
    <!-- Welcome Section -->
    <section class="text-center mb-12 mt-6">
        <h1 class="text-4xl font-bold mb-4">Explore Our Store</h1>
        <p class="text-xl text-gray-600 mb-6">Find everything your pet needs, from food and toys to grooming and accessories.</p>
    </section>


    <section class="mb-12">
        <img src="{{ asset('images/catjump.jpg') }}" alt="Dog with toys" class="main-card">
    </section>

    <!-- Product Categories -->
    <section class="mb-12">
        <div class="flex mb-6 space-x-2">
            <button class="flex-1 py-2 act-tab">Dogs</button>
            <button class="flex-1 py-2 tab">Cats</button>
            <button class="flex-1 py-2 tab">Birds</button>
            <button class="flex-1 py-2 tab">Fish</button>
            <button class="flex-1 py-2 tab">Other</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse($products as $pro)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset($pro->pro_image_url) }}" alt="{{ $pro->pro_name }}" class="w-full h-48 object-cover object-center">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">{{ $pro->pro_name }}</h3>
                    <p class="text-gray-600 font-semibold mb-4">{{ $pro->pro_description }}</p>
                    <p class="text-gray-600 text-sm mb-4">{{ $pro->pro_length }} x {{ $pro->pro_width }} x {{ $pro->pro_height }} cm</p>
                    <div class="flex justify-between items-center">
                        <span class="font-bold text-lg">{{ $pro->pro_price }} LKR</span>
                        <div class="flex space-x-2">
                            <button class="store-card-buttons">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="store-card-buttons">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-gray-600">There are no products to display</p>
            @endforelse
        </div>
    </section>
</div>

@endsection