@extends('layouts.landing')

@section('content')
<div class="container mx-auto px-4 py-8">

    <section class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Explore Our Services</h2>
        <p class="text-xl text-gray-600 mb-6">Tailored solutions for your pet's every need, from personalized care to convenient subscription plans.</p>
    </section>


    <section class="mb-12">
        <img src="{{ asset('images/grooming.jpg') }}" alt="Dog on a couch" class="main-card" />
    </section>

    <div class="grid gap-8">

        <div class=" p-6 rounded-lg flex md:flex-row flex-col items-start text-start">
            <div class="md:w-2/3 w-full pr-4">
                <h2 class="text-2xl font-bold mb-4">Pawsome Doggy Daycare</h2>
                <p class="text-gray-600 mb-4">Your dog's home away from home, filled with fun, friends, and expert care!</p>
                <button class="fixed-button">Explore</button>
            </div>
            <div class="md:w-1/3 w-full mt-4 md:mt-0">
                <img src="{{ asset('images/daycare.jpg') }}" alt="Doggy daycare" class="ft-card">
            </div>
        </div>

        <div class=" p-6 rounded-lg flex md:flex-row flex-col items-start">
            <div class="md:w-2/3 w-full pr-4">
                <h2 class="text-2xl font-bold mb-4">Pawsome Veterinary Care</h2>
                <p class="text-gray-600 mb-4">Expert care to keep your pet healthy, happy, and thriving!</p>
                <button class="fixed-button">Explore</button>
            </div>
            <div class="md:w-1/3 w-full mt-4 md:mt-0">
                <img src="{{ asset('images/catto.jpg') }}" alt="Veterinary care" class="ft-card">
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h1 class="text-2xl font-bold mb-6">Book a Daycare Reservation</h1>
        <form action="{{ route('user.book') }}" method="POST" class=" p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="pet_name" class="block text-gray-700">Pet Name</label>
                <input type="text" id="pet_name" name="pet_name" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none" />
                @error('pet_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="drop_off_date" class="block text-gray-700">Drop-Off Date</label>
                <input type="date" id="drop_off_date" name="drop_off_date" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none" />
                @error('drop_off_date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label for="pick_up_date" class="block text-gray-700">Pick-Up Date</label>
                <input type="date" id="pick_up_date" name="pick_up_date" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none" />
                @error('pick_up_date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description (optional)</label>
                <textarea id="description" name="description" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none"></textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="fixed-button">
                    Confirm
                </button>
            </div>
        </form>
    </div>
</div>
@endsection