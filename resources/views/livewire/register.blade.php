
<form method="POST" wire:submit.prevent="store">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('FullName')" />

        <x-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.1000ms="name" name="name" :value="old('name')" required autofocus />
        @error('name') <span class="block mt-1 text-xs font-semibold text-red-600">{{$message}}</span>@enderror
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.1000ms="email" name="email" :value="old('email')" required />
        @error('email') <span class="block mt-1 text-xs font-semibold text-red-600">{{$message}}</span>@enderror

    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        wire:model.debounce.1000ms="password"
                        required autocomplete="new-password" />
                        @error('password') <span class="block mt-1 text-xs font-semibold text-red-600">{{$message}}</span>@enderror
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        wire:model.debounce.1000ms="password_confirmation"
                        name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <label for="terms" class="flex items-center">
            <input id="terms" required type="checkbox" class="rounded form-checkbox" name="terms">
            <span class="ml-2 text-xs text-gray-500 tracking-wider">{{__('Click to agree to our terms of use and privacy policy.')}}</span>
        </label>
    </div>

    <button type="submit" class="tracking-wider mt-4 cursor-pointer bg-purple-500 block w-full text-center justify-center items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus-rind ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
        {{__('Register')}}
    </button>
</form>