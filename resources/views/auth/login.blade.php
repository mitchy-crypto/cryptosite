<x-guest-layout>
    <x-header/>
    <x-auth-card>
        <div class="pt-2">
            <h4 class="text-2xl mb-3 font-bold">Are you an affiliate?</h4>
            <h4 class="text-sm font-bold text-gray-500">Set up your affiliate account on<b class="text-purple-800">...</b> for free</h4>
            <div class="mt-5">
                <a href="" class="bg-green-500 text-white rounded hover:bg-green-800 shadow-lg uppercase text-sm font-semibold py-2 px-4">sign up</a>
            </div>
            <div class="grid grid-cols-2 gap-2 mt-8">
                <div class="h-36 flex justify-center">
                    <div class="bg-gray-200 rounded-full w-20 h-20"></div>
                </div>
                <div class="h-36 flex items-end justify-end">
                    <div class="bg-gray-200 rounded-full w-20 h-20"></div>
                </div>
                <div class="col-span-2 h-36 flex items-center justify-center">
                    <div class="bg-gray-200 rounded-full w-20 h-20"></div>
                </div>
            </div>
        </div>
        <div class="col-span-2 rounded px-12">
            <div class="h-12 mb-8 flex">
                <div class="bg-gray-500 rounded-full w-12 h-12"></div>
            </div>
            <h4 class="text-xl font-black mb-2">welcome back</h4>
            <h4 class="mb-5 text-sm font-bold text-gray-500">please log in to your account</h4>
            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <x-button class="mt-4 bg-green-600 mb-4 block w-full ">
                {{ __('Log in') }}
            </x-button>
            <hr>
            @if (Route::has('password.request'))
            <a class="flex justify-center mt-4 font-bold text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

        </form>
        </div>
    </x-auth-card>
</x-guest-layout>
