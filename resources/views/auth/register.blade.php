<x-guest-layout>
    <x-header/>
    <x-auth-card>
        <div class="rounded-l md:col-span-2 h-full space-y-4 bg-green-700"></div>
        <div class="rounded-r shadow-xl md:col-span-3 flex flex-col justify-center items-center max-w-lg rounded p-3 mt-5 md:mt-0 md:px-20">
            @livewire('register')
        </div>
    </x-auth-card>
</x-guest-layout>
