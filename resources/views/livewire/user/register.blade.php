<form method="POST" wire:submit.prevent="store">
    @csrf
    <!-- Name -->
    <div>
        <x-label for=" name" :value="__('Your Name')" />

        <x-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.1000ms="name" name="name" :value="old('name')" required autofocus />
        @error('name') <span class="block text-sm text-left font-semibold text-red-600">{{$message}}</span>@enderror
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-label for="email" :value="__('Your Email')" />

        <x-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.1000ms="email" name="email" :value="old('email')" required />
        @error('email') <span class="block text-sm text-left font-semibold text-red-600">{{$message}}</span>@enderror
    </div>

    <!-- <div class="mt-4">
        <x-label for="phone" :value="__('Phone')" />

        <x-input id="phone" class="block mt-1 w-full" type="tel" wire:model.debounce.1000ms="phone" name="phone" :value="old('phone')" required />
    </div> -->

    <div class="mt-4">
        <x-selectinput wire:model.defer="role" :items="App\Models\Role::all()">
            <x-slot name="header">
                <h3 class="text-left mb-1 font-bold text-gray-500 text-xs">Select Role</h3>
            </x-slot>
            <x-slot name="selected">
                <span x-text="item.name" class=" ml-1 block truncate"></span>
            </x-slot>
            <x-slot name="itemArray">
                <span :class="{ 'font-semibold': activeItem === item.id }" class="ml-1 block font-normal truncate" x-text="item.name"></span>
            </x-slot>
        </x-selectinput>
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Set Password')" />

        <x-input id="password" class="block mt-1 w-full" type="password" wire:model.debounce.1000ms="password" name="password" required autocomplete="new-password" />
        @error('password') <span class="block text-sm text-left font-semibold text-red-600">{{$message}}</span>@enderror

    </div>

    <div class="flex justify-between mt-4">
        <label for="remember_me" class="flex items-center">
            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember" />
            <span class="ml-2 text-sm text-gray-500">{{ __('Lorem ipsum dolor sit, amet consectetur ing elit.') }}</span>
        </label>

    </div>

    <!--  -->
    <x-modals.livewire-modal wire:model.defer="showModal">
        <x-slot name="title">
            <h2 class="capitalize text-sm font-bold text-center">Confirm Your Location</h2>
        </x-slot>
        <x-slot name="body">
            <p class="text-gray-500 text-sm font-medium text-center">
                please confirm that this is your place of work to get search requests around your location broadcast to you first for swift response and attribution.
            </p>

            <x-button class="mt-4 bg-purple-600 block w-full text-center">
                Yes, continue.
            </x-button>

        </x-slot>
    </x-modals.livewire-modal>
    <!--  -->

    <a wire:click="confirmLocation" class="cursor-pointer mt-4 bg-purple-600 block w-full text-center justify-center items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
        {{ __('Register') }}
    </a>
</form>
