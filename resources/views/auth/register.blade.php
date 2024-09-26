<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-3xl font-bold text-center text-green-500 mb-4">Join the Pawsome Family!</h2>
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-1">{{ __('Your Name') }}</label>
                <x-input id="name" class="block w-full border border-gray-300 rounded-lg p-2" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-1">{{ __('Email Address') }}</label>
                <x-input id="email" class="block w-full border border-gray-300 rounded-lg p-2" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-1">{{ __('Create a Password') }}</label>
                <x-input id="password" class="block w-full border border-gray-300 rounded-lg p-2" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-1">{{ __('Confirm Your Password') }}</label>
                <x-input id="password_confirmation" class="block w-full border border-gray-300 rounded-lg p-2" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <label for="terms" class="flex items-center">
                    <x-checkbox name="terms" id="terms" required />
                    <span class="ms-2 text-sm text-gray-600">{!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}</span>
                </label>
            </div>
            @endif

            <div class="flex items-center justify-between mt-4">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already a member? Log in!') }}
                </a>

                <x-button class="bg-green-500 hover:bg-green-600 text-white rounded-lg py-2 px-4">
                    {{ __('Join Us!') }}
                </x-button>
            </div>
        </form>
    </div>
</x-guest-layout>