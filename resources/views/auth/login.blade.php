<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-3xl font-bold text-center text-green-500 mb-4">Welcome Back!</h2>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-1">{{ __('Pet Owner Email') }}</label>
                <x-input id="email" class="block w-full border border-gray-300 rounded-lg p-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-1">{{ __('Password') }}</label>
                <x-input id="password" class="block w-full border border-gray-300 rounded-lg p-2" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center mb-4">
                <x-checkbox id="remember_me" name="remember" />
                <label for="remember_me" class="ml-2 text-sm text-gray-600">{{ __('Remember my furry friends!') }}</label>
            </div>

            <div class="flex items-center justify-between mb-4">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <x-button class="w-full bg-green-500 hover:bg-green-600 text-white rounded-lg py-2 mb-4">
                {{ __('Log in to Your Pawsome Account!') }}
            </x-button>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="block text-center text-green-500 hover:text-green-700 font-semibold mt-4">
                {{ __('Join the Pawsome Family!') }}
            </a>
            @endif
        </form>
    </div>
</x-guest-layout>